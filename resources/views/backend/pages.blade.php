@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>Pages</small>
    </h1>
@endsection

@section('content')

    <section class="content">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Role Management</h3>

                <div class="box-tools pull-right">
                    <div class="pull-right mb-10 hidden-sm hidden-xs">
                        <a href="/admin/pages/new" class="btn btn-success btn-xs">New Page</a>
                    </div><!--pull right-->

                    <div class="pull-right mb-10 hidden-lg hidden-md">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                Roles <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/admin/pages/new">New Page</a></li>
                            </ul>
                        </div><!--btn group-->
                    </div><!--pull right-->

                    <div class="clearfix"></div>
                </div>
            </div><!-- /.box-header -->

            <div class="box-body">
                <div class="table-responsive">
                    <div id="roles-table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="roles-table_length"><label>Show <select
                                                name="roles-table_length" aria-controls="roles-table"
                                                class="form-control input-sm">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                            </div>
                            <div class="col-sm-6">
                                <div id="roles-table_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control input-sm" placeholder=""
                                                aria-controls="roles-table"></label></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="roles-table" class="table table-condensed table-hover dataTable no-footer"
                                       role="grid" aria-describedby="roles-table_info" style="width: 1623px;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="roles-table" rowspan="1"
                                            colspan="1" style="width: 297px;"
                                            aria-label="Role: activate to sort column ascending">ID
                                        </th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 349px;"
                                            aria-label="Permissions">Title
                                        </th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 452px;"
                                            aria-label="Number of Users">Permalinks
                                        </th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="roles-table" rowspan="1"
                                            colspan="1" style="width: 157px;" aria-sort="ascending"
                                            aria-label="Sort: activate to sort column descending">Last Updated
                                        </th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 243px;"
                                            aria-label="Actions">Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($all_posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td><a href="/admin/pages/edit/{{ $post->id }}">{{ $post->post_title }}</a>
                                            </td>
                                            <td>{{ $post->guid }}</td>
                                            <td>{{ $post->updated_at }}</td>
                                            <td>
                                                <a href="/admin/pages/edit/{{ $post->id }}" alt="edit page"><span
                                                            class="glyphicon glyphicon-pencil text-success"
                                                            aria-hidden="true"></span></a>
                                                <a href="/admin/pages/delete/{{ $post->id }}" alt="edit post"><span
                                                            class="glyphicon glyphicon-remove text-danger"
                                                            aria-hidden="true"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div><!--table-responsive-->
                        </div><!-- /.box-body -->
                    </div><!--box-->
    </section>
@endsection