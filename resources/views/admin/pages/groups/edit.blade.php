@if ($group)
    <div class="content-wrapper">
        <div class="container-fluid">

            @include(env("ADMIN") . '.includes.errors')
            
            {!! Form::open(["url" => route('admin.groups.update', $group->id), "method" => "POST", "enctype" => "multipart/form-data", "class" => "form-horizontal"]) !!}

                {!! Form::hidden("_method", "PUT") !!}
            
                <div class="row">
                    <div class="col-xs-12 col-md-9">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                {{ ($title) }}
                            </div>

                            <div class="panel-body">

                                <p>The basic required account information</p>
                                <div class="form-group margin-top-15">
                                    <label class="col-sm-2 col-xs-12 control-label">Title</label>
                                    <div class="col-sm-10 col-xs-12">
                                        
                                        {{--  {!! Form::hidden("id", $alias->id) !!}  --}}
                                        
                                        {!! Form::text("title", $group->title, ["class" => "form-control"]) !!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-xs-12 control-label">Action</label>
                                        <div class="col-sm-10 col-xs-12">
                                            {!! Form::checkbox("action",  null, ($group->action == 1) ? "checked" : "", ["class" => "table-row-checkbox"]) !!}

                                            <div style="float: right;">
                                                <a href="{{ route('admin.groups.index') }}" class="btn btn-transparent"><span class="fa fa-arrow-left"></span> Cancel</a>
                                                {!! Form::submit("Опубликовать", ["class" => "btn btn-success"]) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-md-3">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h4 class="title"><span class="fa fa-lightbulb-o">
                                    </span> Updating {{ $group->name }} profile</h4>
                            </div>
                            <div class="panel-body">
                                <p>Make sure to keep your profile information up to date.</p>
                            </div>
                        </div>
                    </div>
                </div>
            {{--  </form>  --}}

            
            {!! Form::close() !!}
            
        </div>
    </div>
@endif
