@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">About Us</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">About Us</a></li>
@endsection
@section('dashboard_content')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <link rel="stylesheet" href="/richtexteditor/rte_theme_default.css"/>
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('about-timeline-update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" class="form-control" name="id" value="{{ $edit->id }}">
      <div class="widget-content widget-content-area br-6">
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="short" required value="{{ $edit->short }}">
          </div>
          <div class="col-sm-4" bis_skin_checked="1">
              <label for="">Status</label>
              <select class="form-control mb-3" name="status">
                <option value="1" {{ $edit->status == 1  ? 'selected' : ''}}>Active</option>
                <option value="0" {{ $edit->status == 0  ? 'selected' : ''}}>In-Active</option>
              </select>
            </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4">
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
          </div>
          <div class="col-sm-12">
            <label for="">Short Descriptions</label>
            <input type="text" class="form-control mb-3" name="arabic_short" required value="{{ $edit->arabic_short }}">
          </div> 
        </div>
      </div>
      <button type="submit" class="btn btn-primary ml-3" name="button" style="margin-top: 15px;">Update</button>

    </form>
  </div>

  <!-- <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
      
    <div class="widget-content widget-content-area br-6">
          <div class="table-responsive mb-4 mt-4">
              <table id="zero-config" class="table table-hover" style="width:100%">
                  <thead>
                      <tr>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Create At</th>
                          <th class="no-content"></th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($get_slider as $slider)
                      <tr>
                        <td>
                          {{ $slider->title }}
                        </td>
                        <td>
                          {{ $slider->description }}
                        </td>
                        <td>
                          <small class="badge badge-success">Active</small>
                        </td>
                        <td>
                           {{ \Carbon\Carbon::parse($slider->created_at)->diffForHumans() }}
                         </td>
                        <td>
                          <a href="{!! route('home-sliders.edit', $slider->id) !!}" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                          </a>
                          <a href="{!! route('home-sliders.delete', $slider->id) !!}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a>
                        </td>
                      </tr>

                    @endforeach
                  </tbody>
                  <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Create At</th>
                        <th class="no-content"></th>
                      </tr>
                  </tfoot>
              </table>
          </div>
      </div>
  </div> -->
  <script type="text/javascript" src="/richtexteditor/rte.js"></script>
  <script type="text/javascript" src="/richtexteditor/plugins/all_plugins.js"></script>
  <script type="text/javascript">
  var editor1 = new RichTextEditor("#inp_editor1");
  var editor2 = new RichTextEditor("#inp_editor2");
  </script>
  @endsection
