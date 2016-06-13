
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <form class="form-horizontal" role="form" action="{{URL('Admin/add_job_do')}}" method="post">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 职位分类 </label>

                <div class="col-sm-9">
                    <select id="job_fenlei" name="jo_id" onchange="books()">
                        <option value="-1">请选择</option>
                        @foreach($data as $val)
                        <option value="{{$val->jo_id}}">{{$val->jo_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 职位名称 </label>

                <div class="col-sm-9">
                    <input type="text" id="ej_name" name="ej_name" placeholder="请输入职位名称" class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="space-4"></div>

            

            <div class="space-4"></div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 职位类型 </label>

                <div class="col-sm-9">
                    <!--<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />-->
                    <select id="job_type" name="jt_id">
                        <option value="-1">请选择</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> 发布公司 </label>

                <div class="col-sm-9">
                    <!--<input readonly="" type="text" class="col-xs-10 col-sm-5" id="form-input-readonly" value="This text field is readonly!" />-->
                    <select id="co_id" name="co_id">
                        <option value="-1">请选择</option>
                        @foreach($list as $val)
                        <option value="{{$val->co_id}}">{{$val->co_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 职位薪资 </label>

                <div class="col-sm-9">
                    <input type="text" id="pay" name="pay" placeholder="请输入职位薪资" class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 工作经验 </label>

                <div class="col-sm-9">
                    <input type="text" id="experience" name="experience" placeholder="请输入工作经验" class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 学历 </label>

                <div class="col-sm-9">
                    <input type="text" id="study" name="study" placeholder="请输入学历" class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 工作时间 </label>

                <div class="col-sm-9">
                    <input type="text" id="working_time" name="working_time" placeholder="请输入工作时间" class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 职位诱惑 </label>

                <div class="col-sm-9">
                    <input type="text" id="job_tempt" name="job_tempt" placeholder="请输入职位诱惑" class="col-xs-10 col-sm-5" />
                </div>
            </div>



            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info"  type="submit">
                        <i class="icon-ok bigger-110"></i>
                        添加
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="icon-undo bigger-110"></i>
                        重置
                    </button>
                </div>



