<?php

namespace App\Http\Controllers\Instructor;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\ChildCategory;
// use App\Live;
use App\Course;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Str;
use App\Courses_joined;
use App\SubTitle;
use App\CourseRequirement;

use App\Instructor;
use App\Country;
class LiveCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware(Auth::guard('instructors')->user());
        // $this->middleware('permission:specialities', ['only' => ['index']]);
        // $this->middleware('permission:اضافة صلاحية', ['only' => ['create','store']]);
        // $this->middleware('permission:تعديل صلاحية', ['only' => ['edit','update']]);
        // $this->middleware('permission:حذف صلاحية', ['only' => ['destroy']]);
    }

    public function index()
    {
        $categories=Category::all();
        $userid = Auth::guard('instructors')->user();

        $courses=Course::where('user_id',$userid->id)->get();
        return view('instructor.livecourses.all',compact('courses','categories'));
    }

    public function create()
    {
        $categories=Category::all();    
        return view('instructor.livecourses.create',compact('categories'));
    }
    

    
    public function store(Request $request)
    { 
        // $this->validate( $request,[          
        //         'title'=>'required',
        //         'short_detail'=>'required',
        //         'target_group'=>'required',
        //         'mahawir'=>'required',
        //         'date'=>'required',
        //         'time'=>'required',
        //         'duration'=>'required',
        //         'payed'=>'required',
        //         'price'=>'required',
        //         'image' => 'required|jpeg,jpg,png,gif'
        //     ],
        //     [
        //         'title.required'=>' العنوان مطلوب ',   
        //         'short_detail.required'=>' يرجى كتابة وصف قصير ',
        //         'target_group.required'=>' يرجي إدخال الفئة المستهدفة',
        //         'mahawir.required'=>'ادخل محاور الدورة',
        //         'date.required'=>'ادخل تاريخ بداية الكورس',
        //         'time.required'=>'يرجى اختيار وقت الدورة',
        //         'duration.required'=>' مدة الكورس مطلوبة ',
        //         'payed.required'=>' حدد الكورس مدفوع ام مجاني ',
        //        'price.required'=>' سعر الكورس مطلوب ',
        //         'image.required'=>' يرجي إختيار صورة jpeg,jpg,png,gif ',
        //     ]
        // );
        // dd($request->all());
        // dd($request->all());
        $userid = Auth::guard('instructors')->user();
        $file_extension = $request -> file('image') -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $file_nameone = $file_name;
        $path = 'img/livecourses';
        $request-> file('image') ->move($path,$file_name);

        // $file_extension2 = $request -> file('video') -> getClientOriginalExtension();
        // $file_name2 = time().'.'.$file_extension2;
        // $file_nameone2 = $file_name2;
        // $path2 = 'img/livecourses';
        // $request-> file('video') ->move($path2,$file_name2);
        
        $add = new Course;
        
        $add->user_id    = $userid->id;
        $add->category_id    = $request->category_id;
        $add->title_ar    = $request->title_ar;
        $add->title_en    = $request->title_en;
        $add->description_ar    = $request->description_ar;
        $add->description_en    = $request->description_en;
        
        $add->date    = $request->date;
        $add->time    = $request->time;
        $add->duration    = $request->duration;
        $add->slug_ar =Str::slug($request->title_ar, '-', Null);
        $add->slug_en =Str::slug($request->title_en, '-', Null);
        $add->language    = $request->language;
        $add->payed    = $request->payed;
        if($request->price){
            $add->price    = $request->price;
        }
        $add->image    = $file_name;
        // $add->video    = $file_name2;
        $add->save();


        $length = count($request->mahawir_ar_name);
        if($length > 0)
        {
            for($i=0; $i<$length; $i++)
            {
                $add_lecture = new SubTitle;
                $add_lecture->course_id    = $add->id;
                $add_lecture->name_ar    = $request->mahawir_ar_name[$i];
                $add_lecture->name_en    = $request->mahawir_en_name[$i];
                
                $add_lecture->save();
                
                
            }
             
        }
        $length = count($request->requirement_ar_name);
        if($length > 0)
        {
            for($i=0; $i<$length; $i++)
            {  
                $add_lecture = new CourseRequirement;
                $add_lecture->course_id    = $add->id;
                $add_lecture->name_ar  = $request->requirement_ar_name[$i];
                $add_lecture->name_en    = $request->requirement_en_name[$i];
                $add_lecture->save();
            }
             
        }
        return redirect()->back()->with("message", 'تم الإضافة بنجاح'); 
    }

    
   
    public function edit(Course $course)
    {
        // dd($straight->id);
        // dd($straight);
        // $dd=Course::where('id',$course->id)->first();
        // dd($course);
        $categories=Category::all();
       
        return view('instructor.livecourses.edit',compact('course','categories'));
    }

    public function update(Request $request, Course $course)

    {
        // $this->validate( $request,[          
        //         'title'=>'required',
        //         'short_detail'=>'required',
        //         'detail'=>'required',
        //         'price'=>'required',
        //         'date'=>'required',
        //         'time'=>'required',
        //         'duration'=>'required',
        //         'payed'=>'required',
        //         'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000'
        //     ],
        //     [
        //         'title.required'=>' العنوان مطلوب ',   
        //         'short_detail.required'=>' يرجى كتابة وصف قصير ',
        //         'detail.required'=>' يرجي كتابة تفاصيل الكورس',
        //         'price.required'=>' سعر الكورس مطلوب ',
        //         'date.required'=>' المستوى مطلوب ',
        //         'time.required'=>' يرجى كتابة متطلبات الكورس ',
        //         'duration.required'=>' مدة الكورس مطلوبة ',
        //         'payed.required'=>' ادخل بعض الكلامات الدلالية ',
        //         'image.required'=>' يرجي إختيار صورة jpeg,jpg,png,gif ',
        //     ]
        // );
        $userid = Auth::guard('instructors')->user();
        $date = date('Y-m-d');
        // dd($course->id);
        $edit = Course::findOrFail($straight->id);
        if($file=$request->file('image'))
        {
            $file_extension = $request -> file('image') -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $file_nameone = $file_name;
            $path = 'assets_admin/img/livecourses';
            $request-> file('image') ->move($path,$file_name);
            $edit->image  = $file_nameone;
        }else{
            $edit->image  = $edit->image;
        }
        $edit->title    = $request->title;
        $edit->title_ar    = $request->title_ar;
        $edit->short_detail    = $request->short_detail;
        $edit->target_group    = $request->target_group;
        $edit->mahawir    = $request->mahawir;
        $edit->date    = $request->date;
        $edit->time    = $request->time;
        $edit->duration    = $request->duration;
        $edit->slug =Str::slug($request->title, '-', Null);
        $edit->payed    = $request->payed;
        if($request->price){
            $edit->price    = $request->price;
        }else{
            $edit->price= 0;
        }
        $edit->save();


        
         
        return redirect()->route('courses.index')->with("message", 'تم التعديل بنجاح'); 
    }


    public function destroy(Request $request )
    {
        // $appointment=Doctor::where('specialityId',$request->id)->get(); 
        // if(count($appointment) == 0){
            $delete = Course::findOrFail($request->id);
            $delete->delete();
            return redirect()->route('courses.index')->with("message",'تم الحذف بنجاح'); 
        // }else{
        //    return redirect()->back()->with("error", 'غير مسموح حذف هذا العنصر'); 
        // }    
        
        $delete = Course::findOrFail($request->id);
        if($delete){
            $courses_joined= Courses_joined::where('liveId',$delete->id)->get();
            foreach ($courses_joined as $item) {         
                $delete_course = Courses_joined::findOrFail($item->id);
                $delete_course->delete();
            }
            $sessionss= Session::where('liveId',$delete->id)->get();
            foreach ($sessionss as $item) {         
                $delete_course = Courses_joined::findOrFail($item->id);
                $delete_course->delete();
            }
        }
        $delete->delete();
        return redirect()->route('courses.index')->with("message",'تم الحذف بنجاح'); 
    } 
    
    
    public function liveJoined($id)
    {
        $subscriptions = Courses_joined::where("liveId" , $id)->get();
        foreach ($subscriptions as $_item) {
             $instructor= Instructor::where('id',$_item->student_id)->first();
             $_item->instructor=$instructor;
             $_item->country= Country::where('id',$instructor->countryId)->first();
        }
        // dd($subscriptions);
        return view('instructor.livecourses.live-joined',compact('subscriptions'));
    }
}