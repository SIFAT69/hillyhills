@extends('layouts.dashboard')
@section('dashboard_title')
  Dashboard - Create
@endsection
@section('dashboard_breadcum')
  <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Share Graph Table</a></li>
  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Create</a></li>
@endsection
@section('dashboard_content')
  <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <form action="{!! route('dashboard.share-graph-table.update') !!}" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" class="form-control" name="id" value="{{ $edit->id }}">
      <div class="widget-content widget-content-area br-6">
        <h4>English Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="title" required value="{{ $edit->title }}">
          </div>
          <div class="d-flex">
            <div class="col-sm-3">
              <label for="">Last</label>
              <input type="text" class="form-control mb-3" name="last" required value="{{ $edit->last }}">
            </div>
            <div class="col-sm-3">
              <label for="">High</label>
              <input type="text" class="form-control mb-3" name="high" required value="{{ $edit->high }}">
            </div>
            <div class="col-sm-3">
              <label for="">Low</label>
              <input type="text" class="form-control mb-3" name="low" required value="{{ $edit->low }}">
            </div>
            <div class="col-sm-3">
              <label for="">(+/-)</label>
              <input type="text" class="form-control mb-3" name="average" required value="{{ $edit->average }}">
            </div>
          </div>
          <div class="d-flex">
            <div class="col-sm-3">
              <label for="">%</label>
              <input type="text" class="form-control mb-3" name="percent" required value="{{ $edit->percent }}">
            </div>
            <div class="col-sm-3">
              <label for="">Bid</label>
              <input type="text" class="form-control mb-3" name="bid" required value="{{ $edit->bid }}">
            </div>
            <div class="col-sm-3">
              <label for="">Ask</label>
              <input type="text" class="form-control mb-3" name="ask" required value="{{ $edit->ask }}">
            </div>
            <div class="col-sm-3">
              <label for="">Volume</label>
              <input type="text" class="form-control mb-3" name="valume" required value="{{ $edit->valume }}">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-content widget-content-area br-6 mt-4" >
        <h4>Arabic Version:</h4>
        <div class="table-responsive mb-4 mt-4">
          <div class="d-flex">
            <div class="col-sm-12">
              <label for="">Title</label>
              <input type="text" class="form-control mb-3" name="arabic_title" required value="{{ $edit->arabic_title }}">
            </div>
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
