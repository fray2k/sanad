@extends('layout.front.main')
@section('content') 
     <!-- start banner -->
     <section class="about-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Learn Through Online Courses</h2>
                </div>
               
            </div>
        </div>
    </section>
     <!-- end banner -->


    <!-- start about -->
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <img src="{{asset('img/settings/'.$contact->image) }}" class="img-fluid">
                </div>

                <div class="col-md-6 mt-3">
                    <h6 class="font-weight-600 text-dark">About Us</h6>
                    <p>{{$contact->desc}}
                        Growing up in a small Turkish village with a one-room schoolhouse, our founder 
                        Eren Bali had limited educational opportunities, until his family got a computer. 
                        Fueled by his dreams to compete internationally in chess and mathematics, Eren used 
                        the internet to access learning resources and connect with people all over the world. 
                        With the help of these communities, he earned a silver medal in the International Math Olympiad.
                    </p>

                    <p>
                        After online learning changed his life, Eren partnered with 
                        co-founders Oktay Caglar and Gagan Biyani toward a common goal: 
                        to make quality education more accessible and improve lives through learning.

                    </p>

                </div>





            </div>
        </div>
    </section>
    <!-- end about -->
@endsection