@extends('layout.front.main')
@section('content') 
 <!-- start contact -->
 <section class="form-section contact-form">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <h6>Keep in touch with us</h6>
                    <hr>


                    <form>


                        <div class="row">

                            <div class="col-md-6">
                            
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone No.">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                   <textarea class="form-control" cols="30" rows="7">Your Message ...</textarea>
                                </div>
                            </div>

                        </div>
                        

                        

                      
                        <button type="submit" class="w-100 btn header-btn text-large font-weight-bold">Send Message</button>


                    </form>

                 



                </div>





            </div>
        </div>
    </section>
    <!-- end contact -->

@endsection