@extends('admin.layouts.master')
@section('title','Teacher List Search')
@section('content')
<style>
    .card{
        background-color: rgb(234, 230, 255);
    }
</style>
 <div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">@yield('title')</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{url('admin/home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row justify-content-center">
            <div class="col-sm-6 card p-0">
                <div class="card-header bg-primary"><h4 class="card-title text-white">Search Student</h4></div>
                <div class="card-body">
                    <form action="{{route('admin.teacher-list-search-details')}}" method="get">
                        <div class="row">
                            <div class="form-group col-sm-4">
                                <select name="state" id="session" required class="form-select shadow">
                                    <option value="" disabled selected>--SELECT STATE--</option>
                                    <option value="1">Bihar</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <select name="district" id="district" required class="form-select shadow">
                                    <option value="" disabled selected>--SELECT DISTRICT--</option>
                                    @foreach ($district as $dist)
                                        <option value="{{$dist->id_district}}">{{$dist->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <select name="block" id="block" class="form-select shadow">
                                    <option value="" disabled selected>--SELECT BLOCK--</option>
                                </select>
                            </div>
                            <div class="form-grop col-sm-12 text-center mt-3">
                                <button class="btn btn-primary"><i class="fa fa-search"></i> Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
     </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery('#district').change(function(){
            let districtid=jQuery(this).val();
            
    $('#block').empty();
    $('#block').append(`<option value="" disabled selected>Processing...</option>`);
            jQuery.ajax({
                url:'{{url('getBlocks')}}',
                type:'post',
                async: true,
                cache: false,
                data:'districtid=' + districtid + '&_token={{csrf_token()}}',
                success:function(response){
                    jQuery('#block').html(response)
                }
            });
        });
    });
</script>
@endsection
