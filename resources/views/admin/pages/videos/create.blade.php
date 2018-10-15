@if ($title && $groups)
    <div class="content-wrapper">
        <div class="container-fluid">

            @include(env("ADMIN") . '.includes.errors')
            
            {!! Form::open(["url" => route('admin.videos.store'), "method" => "POST", "enctype" => "multipart/form-data", "class" => "form-horizontal"]) !!}

                <div class="row">
                    <div class="col-xs-12 col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ ($title) }}
                            </div>

                            <div class="panel-body">

                                <p>The basic required account information</p>

                                <div class="form-group margin-top-15">
                                    <label class="col-sm-2 col-xs-12 control-label">Group</label>
                                    <div class="col-sm-10 col-xs-12">
                                        
                                        <select class="form-control" name="group">
                                            @foreach ($groups as $group)
                                                <option value="{{ ($group->id) }}" selected="{{ ($group->title) }}" style="text-transform: capitalize;">{{ ($group->title) }}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>

                                <div class="form-group margin-top-15">
                                    <label class="col-sm-2 col-xs-12 control-label">Title</label>
                                    <div class="col-sm-10 col-xs-12">
                                        
                                        {!! Form::text("title", "", ["class" => "form-control"]) !!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-sm-2 col-xs-12 control-label">Video</label>
                                        <div class="col-sm-10 col-xs-12">
    
                                            {!! Form::file("video", ["class" => "form-control"]) !!}
    
                                        </div>
                                    </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-xs-12 control-label">Photo</label>
                                    <div class="col-sm-10 col-xs-12">

                                        {!! Form::file("image", ["class" => "form-control"]) !!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-xs-12 control-label">Body</label>
                                    <div class="col-sm-10 col-xs-12">

                                        {!! Form::textarea("body", "", ["class" => "form-control"]) !!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-xs-12 control-label">Action</label>
                                        <div class="col-sm-10 col-xs-12">

                                            {!! Form::checkbox("action",  null, "checked", ["class" => "table-row-checkbox"]) !!}

                                            {!! Form::submit("Опубликовать", ["class" => "btn btn-success", "style" => "float: right;"]) !!}
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="title"><span class="fa fa-lightbulb-o">
                                    </span> Updating {{ $title }} profile</h4>
                            </div>
                            <div class="panel-body">
                                <p>Make sure to keep your profile information up to date.</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            {!! Form::close() !!}
            
        </div>
    </div>
@endif
