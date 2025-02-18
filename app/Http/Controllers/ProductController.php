<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        // Filter by category if provided
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        $products = $query->get();
        // Get distinct categories for the filter menu
        $categories = Product::select('category')->distinct()->pluck('category');
        return view('products.index', compact('products', 'categories'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'partner_id' => 'required|exists:partners,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'category' => 'required|string|max:255',
        ]);
        $product = new Product($request->all());
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images', 'public');
        }
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    public function show(Product $product)
    {
        $partner = $product->partner; 
        // Fetch similar products based on the same category
        $similarProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id) // Exclude the current product
            ->take(4)
            ->get();
        return view('products.show', compact('product', 'partner', 'similarProducts'));
    }
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'partner_id' => 'required|exists:partners,id',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
            'image' => 'nullable|image',
            'category' => 'required|string|max:255',
        ]);

        $product->fill($request->all());
        if ($request->hasFile('image')) {
            $product->image = $request->file('image')->store('images', 'public');
        }
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    public function showDescription1()
    {
        return view('products.description.page-description-food');
    }
    public function showDescription2()
    {
        return view('products.description.page-description-pastryShop');
    }
    public function showDescription3()
    {
        return view('products.description.page-description-glacier');
    }
}