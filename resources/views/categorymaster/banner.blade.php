@extends('layouts/master')

@section('title', 'Create New Banner - E4MCMS')


@section('content')
<?php
//print_r($p1);exit;
?>
<div class="panel">
    <div class="panel-content filler">
        <div class="panel-logo"></div>
        <div class="panel-header">
            <h1><small>Create New Banner</small></h1>

        </div>

        <div class="panel-header">
 <!--<h1><small>Page Navigation Shortcuts</small></h1>-->
        </div>

        <script type="text/javascript">
            $(function () {
                $("#jstree").jstree({
                    "json_data": {
                        "data": [
                            {
                                "data": {
                                    "title": "Channel",
                                    "attr": {"href": "#Channel"}
                                }
                         },
                            {
                                "data": {
                                    "title": "Banner Feature",
                                    "attr": {"href": "#al-feature"}
                                }
                            },
                            {
                                "data": {
                                    "title": "Tags",
                                    "attr": {"href": "#tags"}
                                }
                            }, ]
                    },
                    "plugins": ["themes", "json_data", "ui"]
                })
                        .bind("click.jstree", function (event) {
                            var node = $(event.target).closest("li");
                            document.location.href = node.find('a').attr("href");
                            return false;
                        })
                        .delegate("a", "click", function (event, data) {
                            event.preventDefault();
                        });
            });
        </script>
        <div class="sidebarMenuHolder">
            <div class="JStree">
                <div class="Jstree_shadow_top"></div>
                <div id="jstree"></div>
                <div class="Jstree_shadow_bottom"></div>
            </div>
        </div>    </div>
    <div class="panel-slider">
        <div class="panel-slider-center">
            <div class="panel-slider-arrow"></div>
        </div>
    </div>
</div>
<div class="main-content">
    <div class="breadcrumb-container">
        <ul class="xbreadcrumbs">
            <li>
                <a href="/dashboard">
                    <i class="icon-photon home"></i>
                </a>
            </li>
            <li>
                <a href="#">Banner &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <ul class="breadcrumb-sub-nav">
                    <li>
                        <a href="<?php echo url('Banner/create') ?>">Create New Banner</a>
                    </li>
                    <li>
                        <a href="<?php echo url('Banner/list/deleted') ?>">Published Banner</a>
                    </li>
                    <li>
                        <a href="<?php echo url('Banner/list/deleted') ?>">Deleted Banner</a>
                    </li>

                    <li>
                        <a href="#">Reports</a>
                    </li>
                    <li>
                        <a href="#">Help</a>
                    </li>
                </ul>
            </li>
            <li class="current">
                <a href="javascript:;">Create New Banner</a>
            </li>
        </ul>
    </div>            <header>
        <i class="icon-big-notepad"></i>
        <h2><small>New Banner</small></h2>
    </header>
    <!--            <form class="form-horizontal" id="fileupload" action="" method="POST" enctype="multipart/form-data">-->
   <form method="post" action="{{url('banner')}}" class="form-horizontal" id="fileupload" method="POST">
   {{csrf_field()}}
    <div class="container-fluid"  style="display:none">
        <div class="form-legend" id="Notifications">Notifications</div>
        <!--Notifications begin-->
        <div class="control-group row-fluid" >
            <div class="span12 span-inset">
                <div class="alert alert-success alert-block">
                    <i class="icon-alert icon-alert-info"></i>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>This is Success Notification</strong>
                    <span>Your data has been successfully modified.</span>
                </div>
                <div class="alert alert-block">
                    <i class="icon-alert icon-alert-info"></i>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>This is Alert Notification</strong>
                    <span>No result found.</span>
                </div>
                <div class="alert alert-error alert-block">
                    <i class="icon-alert icon-alert-info"></i>
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>This is Error Notification</strong>
                    <span>Please select a valid search criteria.</span>
                </div>

            </div>
        </div>
        <!--Notifications end-->
    </div>
    <div class="container-fluid">

        <div class="form-legend" id="Channel">Channel</div>

        <!--Select Box with Filter Search begin-->
        <div  class="control-group row-fluid">
            <div class="span3">
                <label class="control-label" for="selectBoxFilter">Banner Position</label>
            </div>
           
             <div class="span9">
                <div class="controls">
                    <select name="channel1"  id="channel1" class="formattedelement">
                      <option value="home">HOME PAGE</option>
                      <option value="story">STORY PAGE</option>
                      <option value="section">SECTION PAGE</option>
                      <option value="newsletter">NEWSLETTER</option>
                      <option value="pr">PR</option>
                    </select>
                </div>
            </div>
          
            <script>
                $().ready(function () {
                    $("#channel1").select2();
                });
            </script>
           
        </div>
        <div  class="control-group row-fluid">
            <div class="span3">
                <label class="control-label" for="selectBoxFilter">Banner Position</label>
            </div>
           
             <div class="span9">
                <div class="controls">
                    <select name="channel"  id="channel" class="formattedelement">
                      <option>Newsletter</option>
                       <option>homepage_sitecapture_770x550</option>
                       <option>homepage_topband_970x90</option>
                       <option>homepage_masterhead1_728x90</option>
                       <option>homepage_masterhead2_728x90</option>
                       <option>homepage_main_1060x80</option>
                       <option>homepage_left1_200x200</option>
                       <option>homepage_left2_200x200</option>
                       <option>homepage_left3_200x200</option>
                       <option>homepage_left4_200x200</option>
                       <option>homepage_middle_horizontal_728x90</option>
                       <option>homepage_middle_square1_200x200</option>
                       <option>homepage_middle_square2_200x200</option>
                       <option>homepage_middle_square3_200x200</option>
                       <option>homepage_middle_square4_200x200</option>
                       <option>homepage_right1_200x200</option>
                       <option>homepage_bottomband_970x90</option>
                       <option>homepage_sitegate_left</option>
                       <option>homepage_sitegate_right</option>

                       <option>Fullstory_topband_970x90</option>
                       <option>Fullstory_sitecapture_770x550</option>
                       <option>Fullstory_masterhead1_728x90</option>
                       <option>Fullstory_masterhead2_728x90</option>
                       <option>Fullstory_main_1060x80</option>
                       <option>Fullstory_right1_257x225</option>
                       <option>Fullstory_right2_257x225</option>
                       <option>Fullstory_right3_257x225</option>
                       <option>Fullstory_right4_257x225</option>
                       <option>Fullstory_mid_728x90</option>
                       <option>Fullstory_bottomband_970x90</option>
                       <option>Fullstory_sitegate_left</option>
                       <option>Fullstory_sitegate_right</option>

                       <option>Section_topband_970x90</option>
                       <option>Section_sitecapture_770x550</option>
                       <option>Section_masterhead1_728x90</option>
                       <option>Section_masterhead2_728x90</option>
                       <option>Section_main_1060x80</option>
                       <option>Section_right1_257x225</option>
                       <option>Section_right2_257x225</option>
                       <option>Section_right3_257x225</option>
                       <option>Section_right4_257x225</option>
                       <option>Section_bottomband_970x90</option>
                       <option>Section_sitegate_left</option>
                       <option>Section_sitegate_right</option>

                       <option>Mobile_topband_990x120</option>
                       <option>Mobile_bottomband_990x120</option>
                       <option>Mobile_sitecapture</option>
                    </select>
                </div>
            </div>
          
            <script>
                $().ready(function () {
                    $("#channel").select2();
                });
            </script>
           
        </div>
            <div id="Text_Area_Resizable" class="control-group row-fluid">
            <div class="span3">
                <label class="control-label">Banner Script</label>
            </div>
            <div class="span9">
                <div class="controls">
                    <textarea  rows="4" class="" id="bscript" name="bscript"></textarea>
                </div>
            </div>
        </div>
        <div id="Text_Area_Resizable" class="control-group row-fluid">
            <div class="span3">
                <label class="control-label">Device</label>
            </div>
            <div class="span9">
               

               <label class="checkbox" style="float: left;">
                    <input type="checkbox" name="mobile" value="1" class="uniformCheckbox2">
                           Mobile
                </label>
                 <label class="checkbox" >
                    <input type="checkbox" name="desktop" value="1" class="uniformCheckbox2">
                          Desktop
                            <script>
                            $().ready(function(){
                    $(".uniformCheckbox2").uniform();
                    });</script>
                </label>
               
            </div>
        </div>
        <!--Select Box with Filter Search end-->                    
    </div>
    <div class="container-fluid">
        
        <div class="control-group row-fluid">
            <div class="span12 span-inset">
                <button value="P" name="status" type="submit" class="btn btn-warning">Submit</button><img src="images/photon/preloader/76.gif" alt="loader" style="width:5%; display:none;"/>  


            </div>
        </div>
    </div>
    {!! Form::close() !!}
        <div class="container-fluid">
            <div class="form-legend" id="tags3">Existing Banner</div>
            <div class="row-fluid">
                <div class="span12">
                    <table class="table table-striped" id="tableSortable">
                        <thead>
                            <tr>
                                <th>ID</th>
                               
                                <th>Add Place</th>
                                <th>Added On</th>
                                 <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($parents as $a)
                            <tr id="item_<?php echo $a->bid;?>">
                                <td>{{$a->bid}}</td>
                               
                                 <td>{{$a->bposition}}</td>
                                  <td>{{$a->created_at}}</td>
                                  @if($a->status=='0')
                                  <td>Inactive</td>
                                  @else
                                  <td>Active</td>
                               @endif
                                <td>
                                    <td><a href="{{url('/')}}/banner/{{$a->bid}}">Edit</a></td>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
            <!--Sortable Non-responsive Table end-->
            <div class="dataTables_paginate paging_bootstrap pagination">

                {!! $parents->appends(Input::get())->render() !!}
            </div>
        </div>
        <style type="text/css">
  .checkbox {
    min-height: 30px;
    line-height: 30px;
    padding-left: 10px;
    float: left;
        margin-top: 0px !important;}

        #zzadcontent1537513712{
display: none;
        }
        #zzadcontent1537515451{
          display: none;
        }
</style>
@stop

