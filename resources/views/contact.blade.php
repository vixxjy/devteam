@extends('layouts.main')

@section('content')
        <main class="body">
            <div class="container uk-margin-medium-top uk-margin-medium-bottom">
            
                <div>
                        <h3 class="uk-article-title">OUR ADMISSION PROCESS</h3>
                        <p>Welcome to St. Augustine’s College Du. It is our hope that you will want to learn more
                            about our college. St. Augustine’s College Du is a fruit of the educational projects of the Order of St. Augustine’s and extension of your family where we embrace core values of holiness, love, truth, unity, compassion, integrity and inspire academic excellence. We welcome your application and look forward to answering any questions you may have about attending St. Augustine’s College Du.</p>
                        <h4><em>Admission Procedures</em></h4>
                    <ul class="uk-list uk-list-bullet">
                        <li>Purchase and completion of application forms, copies of your child/ward’s birth certificate/ declaration of age.</li>
                        <li>Writing of a competitive common entrance of the school on the set date, at the college and other designated centers across the country. Candidates must pass the Entrance Exams with a minimum average of 50% to be successful.</li>
                        <li>Oral interview of prospective candidates and their parents. Be informed that selection into the St. Augustine's College is strictly by merit</li>
                        <li>Issuance of Acceptance Letter and payment of Acceptance Fee within the prescribed time frame.</li>
                    </ul>
                        <h4><em>Age Consideration</em></h4>
                    <ul class="uk-list uk-list-bullet">
                        <li>Prospective students into JSS 1 must have turned ten (10) before the day of entry into the College. Such student must be mature enough to take good care of himself/ herself, carry out the normal daily routine, and still being able to face the rigours of studies.</li>
                        <li>Prospective pupils must currently be in Primary 5-6.</li>
                    </ul>
                        <h4><em>Transfer Students.</em></h4>
                    <p>Transfer students are welcome only to JSS 2 and must fulfill the following conditions:</p>
                    <ul class="uk-list uk-list-bullet">
                        <li>Obtain a registration form from the school.</li>
                        <li>Must currently be in school.</li>
                        <li>Must have passed his/her last exams with good grades.</li>
                        <li>Must have passed the school’s entrance examination with a minimum of 50%.</li>
                    </ul>
                    </div>
        <h3>Please <a class="uk-link font-600" href="contact">contact us</a> if you have any questions about being part    of us.</h3>
        <section class="contact-for mt-4">
        @if($errors->any())
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach()
                        </div>
                    @endif
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p><b>{{ $message }}</b></p>
                       </div>
            @endif
<div class="row">
    <div class="col-md-6">
    <form action="{{ route('store-message')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group m-2">
                        <label for="name">Your Name<span class="text-danger">*</span></label>
                        <input autofocus type="text" class="form-control border-input p-2" name="name" placeholder="Name" value="{{ old('name') }}" required minlength="5" maxlength="255">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group  m-2">
                        <label>Your Email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control border-input p-3" name="email" placeholder="Email Address" value="{{ old('email') }}" required >
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                    <div class="form-group m-2 ">
                        <label for="subtitle">Your Message<span class="text-danger">*</span></label>
                        
                        <textarea  type="text"  class="form-control border-input p-3" name="message" placeholder="Message" value="{{ old('message') }}" required minlength="5" maxlength="255"></textarea>
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                </div>
                
            </div>

            <div class="m-3">
                <button type="submit" class="btn btn-info btn-fill btn-wd">Send Message</button>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
    <div class="col-md-6"></div>
 </section>
  </div>
</main>
@endsection
