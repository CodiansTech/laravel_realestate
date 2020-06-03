@extends('layouts.main')

@section('title', 'Users')

@section('content')


<div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Account</a></li>
                <li class="active">Users</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
            <!-- sidebar -->
            <div class="col-md-3 col-sm-2">
                @include('layouts.partials.aside')
            </div><!-- /.col-md-3 -->
            <!-- end Sidebar -->
                <!-- All Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="my-properties">
                        <header><h1>Manage Users</h1></header>
                        <div class="my-properties">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
										<th>Properties</th>
                                        <th>Role</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
									@foreach($users as $user)
                                    <tr>
										<td></td>
                                        <td>{{$user->getName()}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->properties->count()}}</td>
                                        <td><label class="btn btn-default"><strong>{{$user->getRole()}}</strong></label></td>
                                        <td class="actions">
                                            <a href="{{route('admin.users.edit', $user->id)}}" class="edit"><i class="fa fa-pencil"></i>Edit</a>
                                        </td>
                                    </tr>
									@endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                            <!-- Pagination -->
                            <div class="center">
							
									{{$users->render()}}
                            </div><!-- /.center-->
                        </div><!-- /.my-properties -->
                    </section><!-- /#my-properties -->
                </div><!-- /.col-md-9 -->
                <!-- end All Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->


@endsection

