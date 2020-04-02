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

      <div class = "row">
        <div class = "col-md" id="btnSendSMS">
          <button type="button" class="btn btn-primary form-control btn-block mt-3" onclick="sendSMS()" >Αποστολή SMS</button>
        </div>
        <div class = "col-md">
          <button type="submit" class="btn btn-primary btn-default form-control btn-block mt-3">Εκτύπωση</button>
        </div>
    </div>

     </form>

     <div class="alert alert-success mt-4" role="alert">
       Η φόρμα αποθηκεύει τα στοιχεία που καταχωρείτε τοπικά στον υπολογιστή σας χρησιμοποιώντας Cookies
       ώστε να συμπληρώνεται ταχύτερα, καθώς δεν χρειάζεται να πληκτρολογείτε τα ίδια στοιχεία κάθε φορά.
     </div>

 </div>
</div>

<script>
  		function sendSMS() {
			var checkBox1 = document.getElementById("customCheckFarmakeio");
			var checkBox2 = document.getElementById("customCheckMarket");
			var checkBox3 = document.getElementById("customCheckBank");
			var checkBox4 = document.getElementById("customCheckHelp");
			var checkBox5 = document.getElementById("customCheckTeleti");
			var checkBox6 = document.getElementById("customCheckGym");
			var select = '0';
			var name = document.getElementById("inputYpografon").value;
			var address = document.getElementById("inputAddress").value;
			
			 if (checkBox1.checked == true){
				select = '1';
			} else if (checkBox2.checked == true) {
				select = '2';
			} else if (checkBox3.checked == true) {
				select = '3';
			} else if (checkBox4.checked == true) {
				select = '4';
			} else if (checkBox5.checked == true) {
				select = '5';
			} else if (checkBox6.checked == true) {
				select = '6';
			} else {
				select = '';
			}

      saveFormCookies();
			location.href = encodeURI('sms:13033;?&body=' + select + ' ' + name + ' ' + address);
		}	

    function saveFormCookies()
    {
      Cookies.set('cookie_inputYpografon', encodeURIComponent($("#inputYpografon").val()), {expires: 90, path: ''})
      Cookies.set('cookie_inputBirthdate', encodeURIComponent($("#inputBirthdate").val()), {expires: 90, path: '' })
      Cookies.set('cookie_inputAddress', encodeURIComponent($("#inputAddress").val()), {expires: 90, path: '' })
      Cookies.set('cookie_inputPlace', encodeURIComponent($("#inputPlace").val()), {expires: 90, path: '' })
    }

    $(document).ready(function () {
        $('#myform').submit(function (e) {
          saveFormCookies();
          return true;
        });

        var isMobile = /(android)/i.test(navigator.userAgent) || /(iphone)/i.test(navigator.userAgent) ||
                       /(ipad)/i.test(navigator.userAgent) || /(ipod)/i.test(navigator.userAgent) ||
                       /(mobile)/i.test(navigator.userAgent);
        isMobile ? true : $("#btnSendSMS").addClass('d-none');
    });

    $(function() {
        $("#inputYpografon").val(decodeURIComponent(Cookies.get('cookie_inputYpografon') === undefined ? '' : Cookies.get('cookie_inputYpografon')));
        $("#inputBirthdate").val(decodeURIComponent(Cookies.get('cookie_inputBirthdate') === undefined ? '' : Cookies.get('cookie_inputBirthdate')));
        $("#inputAddress").val(decodeURIComponent(Cookies.get('cookie_inputAddress') === undefined ? '' : Cookies.get('cookie_inputAddress')));
        $("#inputPlace").val(decodeURIComponent(Cookies.get('cookie_inputPlace') === undefined ? '' : Cookies.get('cookie_inputPlace')));

        var currentDate = new Date();
        $("#inputTravelDate").val(currentDate.toLocaleDateString('el-GR'));
        var currentTime = currentDate.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})
           .replace(/(:\d{2}| [AP]M)$/, "");
        $("#inputTravelTime").val(currentTime);
    });

</script>
@endsection
