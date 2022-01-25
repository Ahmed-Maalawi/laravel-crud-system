<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header text-capitalize">edit category</div>
                        <div class="card-body">
                            <form action="{{ url('category/update/'.$category->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="category-name" class="form-label">update category name</label>
                                    <input type="text" name="category_name" class="form-control" id="category-name" value="{{ $category->category_name }}">
                                </div>
                                @error('category_name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                                <button type="submit" class="btn btn-outline-primary">update Category</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
