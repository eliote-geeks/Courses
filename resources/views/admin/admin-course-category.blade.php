@extends('layouts.layouts.app')
@section('content')
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="border-bottom pb-4 mb-4 d-md-flex align-items-center justify-content-between">
                            <div class="mb-3 mb-md-0">
                                <h1 class="mb-1 h2 fw-bold">Courses Category</h1>
                                <!-- Breadcrumb -->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="admin-dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#">Courses</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Courses Category
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCatgory">Add New
                    Category</a>
                            </div>
                        </div>
                    </div>
                                    <div class="">
                    <div class="row">
                      <!-- basic table -->
                      <div class="col-md-12 col-12 mb-5">
                        <div class="card">
                          <!-- card header  -->
                          <div class="card-header border-bottom-0">
                            <h4 class="mb-1">Categories {{ $categories->count() }}</h4>
                          </div>
                          <!-- table  -->
                       <div class="card-body pt-2">
                        <table id="dataTableBasic" class="table" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>View Count</th>
                                    <th>Course</th>
                                    <th>Date Created</th>
                                    <th>Date Updated</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                @forelse($categories as $category)
                                <tr>                                
                                    <td>{{Str::title($category->name)}}</td>
                                    <td width="5%">{{$category->view_count}}</td>
                                    <td width="5%">{{ App\Models\Course::where('category_id',$category->id)->count() }}</td>
                                    <td width="15%">{{ \Carbon\Carbon::parse($category->created_at)->format('d M, Y')}}</td>
                                    <td width="15%">{{ \Carbon\Carbon::parse($category->updated_at)->format('d M, Y')}}</td>
                                    <td width="50%">{!! $category->description !!}</td>
                                    <td width="3%"> @if($category->view == 1) <span class="badge-dot bg-success"></span> @else <span class="badge-dot bg-danger"></span> @endif </td>
                                    <td width="5%" class="text-muted align-middle">
                                                <span class="dropdown dropstart">
                            <a class="text-muted text-decoration-none" href="#" role="button" id="courseDropdown4"
                              data-bs-toggle="dropdown"  data-bs-offset="-20,20" aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                              <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item"href="{{ route('categories.upgrade',$category)}}"><i
                                  class="fe fe-send dropdown-item-icon"></i>Publish</a>
                                  <a class="dropdown-item"href="{{ route('categories.upgrade',$category)}}"><i
                                  class="fe fe-inbox dropdown-item-icon text-muted"></i>Move Draft</a>
                        
                                                <a class="dropdown-item"  href="{{ route('categories.delete',$category) }}"><i
                                  class="fe fe-trash dropdown-item-icon"></i>Delete</a>
                                                </span>
                                                </span>
                                            </td>
                                </tr>
@empty

@endforelse
                            </tbody>

                        </table>
                       </div>
                        </div>

                      </div>

                    </div>
                  </div>

                  <div class="modal fade" id="newCatgory" tabindex="-1" role="dialog" aria-labelledby="newCatgoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="newCatgoryLabel">
                    Create New Category
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

        </button>
            </div>
            <div class="modal-body">
                <form method="POST" action={{ route("categories.store") }}>
                @csrf
                    <div class="mb-3 mb-2">
                        <label class="form-label" for="title">Title<span class="text-danger">*</span></label>
                        <input value="{{ old('name') }}" type="text" name="name" class="@error('name', 'categories') is-invalid @enderror form-control" placeholder="Write a Category" id="title" required>
                        <small style="color:red;">Field must contain a unique value</small>
                    </div>
      
                    <div class="mb-3 mb-3">
                        <label class="form-label">Short Description</label>
                         {{-- <div id="editor">This is some sample content.</div>                         --}}
                         <textarea  id="editor2"  class="@error('description', 'categories') is-invalid @enderror form-control" name="description" rows="5">                            
                            {{ old('description') }}
                         </textarea> 
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Enabled</label>
                        <div class="form-check form-switch">
                            <input name="view" type="checkbox" class="form-check-input" id="customSwitch1" checked>
                            <label class="form-check-label" for="customSwitch1"></label>
                        </div>
                    </div>
                    
                    <div>
                        <button type="submit" class="btn btn-primary">Add New Category</button>
                        <button type="reset" class="btn btn-outline-white" data-bs-dismiss="modal">
                Close
              </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection