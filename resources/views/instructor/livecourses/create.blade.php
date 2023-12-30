

@extends('layout.instructor.main')
@section('content') 
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
  

  <div class="content-header row">
      <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
                      <h3 class="content-header-title mb-0 d-inline-block">إضافة كورس مباشر جديد</h3><br>
                        <div class="row breadcrumbs-top d-inline-block">
	                        <div class="breadcrumb-wrapper col-12">
	                       	<ol class="breadcrumb">
		                        <li class="breadcrumb-item"><a href="{{url('instructor/dashboard')}}">الرئيسية</a>	</li>
		            	       	<li class="breadcrumb-item active">كورسات مباشرة (اونلاين)</li>
	                        </ol> 
                        </div>
                      	</div>
                    </div> 
       @if(session()->has('message'))
            @include('admin.includes.alerts.success')
          @endif
  </div>
<style type="text/css">
  .hidden1{
    /*display: none;*/
  }
</style>


  <section id="basic-form-layouts">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                </div>
                <div class="card-content collpase show">
                  <div class="card-body">
                    <form action="{{route('courses.store')}}" method="POST" name="le_form"  enctype="multipart/form-data">
                      @csrf
                      <div class="row form-row">
                          <div class="form-group col-md-6 col-sm-12">
                            <label>عنوان الدورة </label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}" id="titleid">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <span id="titleError" style="color: red;"></span>
                          </div>
                          <div class="form-group col-md-6 col-sm-12">
                            <label>لغة الدورة</label>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}" id="titleid">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <span id="titleError" style="color: red;"></span>
                          </div>
                          
                          
                          
                          <div class="form-group col-md-4 col-sm-6">
                            <label>تاريخ بداية الدورة  </label>
                              <input type="date" name="date" class="form-control" value="{{old('date')}}" id="dateid">
                              @error('date')
                                <span class="text-danger">{{$message}}</span>
                              @enderror
                              <span id="dateError" style="color: red;"></span>
                          </div>
                          <div class="form-group col-md-4 col-sm-6">                                   
                                <label> وقت الدورة (توقيت الاردن) </label>
                                <select name="time" class="form-control formselect" id="timeid" >
                                    <option  value=""  selected>اختار</option>  
                                    <option value="6.30 - 8.00">6.30 مساء - 8.00 مساء</option>
                                    <option value="8.00 - 9.30">8.00 مساء - 9.30 مساء </option>  
                                    <option value="9.30 - 11:00">9.30 مساء - 11.00 مساء </option>  
                                </select>
                                <span id="timeError" style="color: red;"></span>
                          </div>
                          <div class="form-group col-md-4 col-sm-6">                                   
                                <label>حدد مدة الدورة بالايام</label>
                                <select name="duration" class="form-control formselect" id="durationid">
                                    <option  value=""  selected>اختار</option>  
                                    <option value="3">
                                        3 أيام
                                    </option>  
                                     <option value="4" >
                                        4 أيام
                                    </option>
                                    <option value="5" >
                                        5 أيام
                                    </option>
                                   
                                    <option value="7" >
                                        7 أيام
                                    </option> 
                                    <option value="10" >
                                        10 أيام
                                    </option> 
                                    
                                </select>
                                <span id="durationError" style="color: red;"></span>
                          </div>  
                          <div class="form-group col-md-6 col-sm-6">                                   
                                <label>حدد الدورة مجاني ام مدفوع</label>
                                <select name="payed" class="form-control formselect" id="payedId">
                                  <option value="0" {{ old('payed') == "0" ? "selected" : "" }}>مجاني</option>  
                                  <option value="1" {{ old('payed') == "1" ? "selected" : "" }}>مدفوع</option>   
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-sm-6">                                   
                                <label>حدد سعر الدورة</label>
                                <select name="price" class="form-control formselect" id="priceId" disabled>
                                    <option value="0"  selected>0</option>  
                                    <option value="3">3</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option> 
                                    <option value="20">20</option> 
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                    <option value="70">70</option>
                                    <option value="80">80</option>
                                    <option value="90">90</option>
                                    <option value="90">100</option>
                                </select>
                                <span id="priceError" style="color: red;"></span>
                            </div>
                          <div class="form-group col-md-12 col-sm-6">
                            <label>شرح توضيحي عن الدورة</label>
                            <textarea name="short_detail"  cols="30" rows="2"  class="form-control" id="short_detailid">{{old('short_detail')}}</textarea>
                            @error('short_detail')
                              <span class="text-danger">{{$message}}</span>
                            @enderror
                            <span id="short_detailError" style="color: red;"></span>
                          </div>
                          
                          <div class="form-group col-md-6">
                            <label> محاور الدورة</label>
                            <input name="mahawir" type="text" class="input-selectize" value="الحافز,التدرب,الوعي الذاتي,التطور الذاتي">
                            @error('mahawir')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <span id="mahawirError" style="color: red;"></span>
                          </div>
                          <div class="form-group col-md-6">
                            <label>متطلبات الدورة</label>
                            <input name="live_need" type="text" class="input-selectize" value="هتمامك بموضوع الدورة ,ورغبتك في التعلم.">
                            @error('live_need')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <span id="liveNeedError" style="color: red;"></span>
                          </div>
                            
                          <div class="form-group col-sm-6 ">
                              <label> فيديو تعريفي عن الدورة </label>
                              <input type="file" name="image" class="form-control" accept=".JPEG,.JPG,.PNG,.GIF,.TIF,.TIFF" id="imageid">
                              <span id="imageError" style="color: red;"></span>
                          </div>
                          <div class="form-group col-sm-6 ">
                            <label>صورة تعريفية عن الدورة </label>
                            <input type="file" name="image" class="form-control" accept=".JPEG,.JPG,.PNG,.GIF,.TIF,.TIFF" id="imageid">
                            <span id="imageError" style="color: red;"></span>
                          </div>
                      </div>
                      <!--<div class="col-md-12"><hr/></div>-->
                    
                       

                      <div class="col-12 col-md-12">
                        <div class="form-group col-12 col-md-4">
                          <button type="submit" class="btn btn-primary btn-block" onclick="return Validateallinput()">حفظ </button>
                        </div> 
                        <div class="loader-wrapper col-md-4" >
                            <div class="loader-container">
                              <div class="ball-spin-fade-loader loader-blue">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                              </div>
                            </div>
                        </div>

                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </section>
    <?php 
       $videos=session()->get('videos_sessions');
    ?>

<script>
    $('.loader-container').hide();
  let videoid = 1;
   $('.hidden1').hide();
  





  function Validateallinput() {
    
    
    var titleid = document.getElementById("titleid");
    var titleError = document.getElementById("titleError");
    
    var titlearid = document.getElementById("titlearid");
    var titlearError = document.getElementById("titlearError");

    var short_detailid = document.getElementById("short_detailid");
    var short_detailError = document.getElementById("short_detailError");
    
    // var short_detailid = document.getElementById("short_detailid");
    // var short_detailError = document.getElementById("short_detailError");

    var target_groupid = document.getElementById("target_groupid");
    var target_groupError = document.getElementById("target_groupError");
    
    var mahawirid = document.getElementById("mahawirid");
    var mahawirError = document.getElementById("mahawirError");

    var dateid = document.getElementById("dateid");
    var dateError = document.getElementById("dateError");

    var timeid = document.getElementById("timeid");
    var timeError = document.getElementById("timeError");

    var durationid = document.getElementById("durationid");
    var durationError = document.getElementById("durationError");


    var imageid = document.getElementById("imageid");
    var imageError = document.getElementById("imageError");

    if (titleid.value == "") {
        titleError.innerHTML = "يرجى كتابة العنوان";
            // titleid.focus(); 
            return false;
    }
    titleError.innerHTML = "";
    
    if (titlearid.value == "") {
        titlearError.innerHTML = "يرجى كتابة العنوان انجليزي";
            // titleid.focus(); 
            return false;
    }
    titlearError.innerHTML = "";

    

    if (short_detailid.value == "") {
        short_detailError.innerHTML = "يرجى ادخال وصف قصير";
        // titleid.focus(); 
        return false;
    }
    short_detailError.innerHTML = "";

   
    if (target_groupid.value == "") {
        target_groupError.innerHTML = "يرجى ادخال الفئة المستهدفة";
        // titleid.focus(); 
        return false;
    }
    target_groupError.innerHTML = "";
    
    if (mahawirid.value == "") {
        mahawirError.innerHTML = "يرجى ادخال محاور الدورة";
        // titleid.focus(); 
        return false;
    }
    mahawirError.innerHTML = "";

    if (dateid.value == "") {
        dateError.innerHTML = "يرجى ادخال تاريخ بداية الكورس";
        // titleid.focus(); 
        return false;
    }
    dateError.innerHTML = "";
    
    if (timeid.value == "") {
        timeError.innerHTML = "يرجى ا اختيار وقت الدورة  ";
        return false;
    }
    timeError.innerHTML = "";
    
   


    // if (endDateid.value == "") {
    //     endDateError.innerHTML = "يرجى ادخال تاريخ نهاية الكورس";
    //     // titleid.focus(); 
    //     return false;
    // }
    // endDateError.innerHTML = "";


    if (durationid.value == "") {
        durationError.innerHTML = "يرجى ادخال مدة الكورس";
        // titleid.focus(); 
        return false;    
    }
    durationError.innerHTML = "";
    
    // if(!/^[0-9]+$/.test(durationid.value)){
    //   durationError.innerHTML = "الرجاء إدخال رقم فقط";
    //   return false;
    // }
    // durationError.innerHTML = "";

    

    if (imageid.value == "") {
        imageError.innerHTML = "يرجى ارفاق صورة";
        // titleid.focus(); 
        return false;
    }
    imageError.innerHTML = "";

     var allowedExtensionsImage = /(\.JPEG|\.JPG|\.PNG|\.GIF|\.TIF|\.TIFF)$/i;
    if(!allowedExtensionsImage.exec(imageid.value)){
        imageError.innerHTML = "  يجب أن يكون الأمتداد من نوع (.JPEG,.JPG,.PNG,.GIF,.TIF,.TIFF)   فقط" ;
           
        imageid.value = '';
        // imageeid.focus(); 
        return false;
    }
     imageError.innerHTML = "";
    
   
    $('.loader-container').show();
    // return false;
  }      
  


</script>



 <script>
        $(document).ready(function () {
            $('#payedId').on('change', function () {
                
                console.log("welcome sub"); 
                let payedId = $(this).val();
                console.log(payedId); 
                if(payedId ==1){
                    document.getElementById('priceId').disabled = false;
                }else{
                    document.getElementById('priceId').value = "";
                    document.getElementById('priceId').disabled = true;
                }
            });
        });
    </script>
    <!--@toastr_js-->
    <!--@toastr_render-->
@endsection
             
<!-- 200 مقدم
400 عند الانتهاد من  التطبيق اندرويد و ios
100  عند الانتهاد من لوحة التحكم
100 بعد رفع التطبيق --> 