@extends('base')

@section('main')
<div class="row">
  <div class="col">
    <h4 class="text-center">ΒΕΒΑΙΩΣΗ ΚΑΤ’ ΕΞΑΙΡΕΣΗ ΜΕΤΑΚΙΝΗΣΗΣ ΠΟΛΙΤΩΝ</h4>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

     <form method="post" name="myform" id="myform" action="{{ route('print_travel_exclusion_form') }}">
          @csrf
          <div class="form-group">
            <label for="inputYpografon">Ο/Η υπογράφων-ούσα</label>
            <input type="text" class="form-control" id="inputYpografon" name="inputYpografon" placeholder="Καταχωρήστε το ονοματεπώνυμό σας">
          </div>
          <div class="form-group">
            <label for="inputBirthdate">Ημερομηνία γέννησης</label>
            <input type="text" class="form-control" id="inputBirthdate" name="inputBirthdate">
          </div>

          <div class="form-group">
            <label for="inputAddress">Διεύθυνση κατοικίας</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress">
         </div>

         <div class="form-group">
           <label for="inputPlace">Τόπος</label>
           <input type="text" class="form-control" id="inputPlace" name="inputPlace">
         </div>

         <div class="form-group">
           <label for="inputTravelTime">Ώρα μετακίνησης</label>
	   <input type="text" class="form-control" id="inputTravelTime" name="inputTravelTime">
         </div>

         <div class="form-group">
           <label for="inputTravelDate">Ημερομηνία</label>
           <input type="text" class="form-control" id="inputTravelDate" name="inputTravelDate">
         </div>

         <div class="row">
           <div class="col">
            <b>Δηλώνω ότι η μετακίνηση μου σχετίζεται με τον ακόλουθο λόγο: <br />
            (Επιλέξτε το αντίστοιχο πλαίσιο του Μέρους Β’.)</b>
           </div>
         </div>

         <div class="form-group custom-control custom-checkbox mt-3">
            <b>
            <input type="checkbox" class="custom-control-input" id="customCheckFarmakeio" name="customCheckFarmakeio">
            <label class="custom-control-label" for="customCheckFarmakeio">Μετάβαση σε φαρμακείο ή επίσκεψη στον γιατρό, εφόσον αυτό συνιστάται μετά από σχετική επικοινωνία.</label>
            </b>
         </div>

         <div class="form-group custom-control custom-checkbox mt-2">
           <b>
           <input type="checkbox" class="custom-control-input" id="customCheckMarket" name="customCheckMarket">
           <label class="custom-control-label" for="customCheckMarket">Μετάβαση σε εν λειτουργία κατάστημα προμηθειών αγαθών πρώτης ανάγκης, όπου δεν είναι δυνατή η αποστολή τους.</label>
          </b>
         </div>

      <div class="form-group custom-control custom-checkbox mt-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckBank" name="customCheckBank">
        <label class="custom-control-label" for="customCheckBank">Μετάβαση στην τράπεζα, στο μέτρο που δεν είναι δυνατή η ηλεκτρονική συναλλαγή.</label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckHelp" name="customCheckHelp">
        <label class="custom-control-label" for="customCheckHelp">Κίνηση για παροχή βοήθειας σε ανθρώπους που βρίσκονται σε ανάγκη. </label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckTeleti" name="customCheckTeleti">
        <label class="custom-control-label" for="customCheckTeleti">Μετάβαση σε τελετή (π.χ. κηδεία, γάμος, βάφτιση) υπό τους όρους που προβλέπει ο νόμος ή μετάβαση διαζευγμένων γονέων ή γονέων που τελούν σε διάσταση που είναι αναγκαία για τη διασφάλιση της επικοινωνίας γονέων και τέκνων, σύμφωνα με τις κείμενες διατάξεις.</label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2 mb-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckGym" name="customCheckGym">
        <label class="custom-control-label" for="customCheckGym">Σύντομη μετακίνηση, κοντά στην κατοικία μου, για ατομική σωματική άσκηση (εξαιρείται οποιαδήποτε συλλογική αθλητική δραστηριότητα) ή για τις ανάγκες κατοικιδίου ζώου.</label>
        </b>
      </div>

      <button type="submit" class="btn btn-primary btn-default form-control mt-3 mb-4">Εκτύπωση</button>

     </form>

     <div class="alert alert-success" role="alert">
       Η φόρμα αποθηκεύει τα στοιχεία που καταχωρείτε τοπικά στον υπολογιστή σας χρησιμοποιώντας Cookies
       ώστε να συμπληρώνεται ταχύτερα, καθώς δεν χρειάζεται να πληκτρολογείτε τα ίδια στοιχεία κάθε φορά.
     </div>

 </div>
</div>

<script>

$(document).ready(function () {
    $('#myform').submit(function (e) {
            //document.cookie = "yourCookieName=okokoko";
            var data = $("#inputYpografon").val();
            Cookies.set('cookie_inputYpografon', $("#inputYpografon").val(), {expires: 90, path: ''})
            Cookies.set('cookie_inputBirthdate', $("#inputBirthdate").val(), {expires: 90, path: '' })
            Cookies.set('cookie_inputAddress', $("#inputAddress").val(), {expires: 90, path: '' })
            Cookies.set('cookie_inputPlace', $("#inputPlace").val(), {expires: 90, path: '' })
    });

    $('show_travel_exclusion_form').addClass('active');
});

    $(function() {
        $("#inputYpografon").val(Cookies.get('cookie_inputYpografon'));
        $("#inputBirthdate").val(Cookies.get('cookie_inputBirthdate'));
        $("#inputAddress").val(Cookies.get('cookie_inputAddress'));
        $("#inputPlace").val(Cookies.get('cookie_inputPlace'));

        var currentDate = new Date();
        $("#inputTravelDate").val(currentDate.toLocaleDateString('el-GR'));
        var currentTime = currentDate.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})
           .replace(/(:\d{2}| [AP]M)$/, "");
        $("#inputTravelTime").val(currentTime);
    });


</script>
@endsection
