@extends('base')

@section('main')
<div class="row">
  <div class="col">
    <h4 class="text-center">ΔΗΛΩΣΗ ΚΑΤ’ ΕΞΑΙΡΕΣΗ ΜΕΤΑΚΙΝΗΣΗΣ ΠΟΛΙΤΩΝ ΚΥΠΡΟΥ</h4>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

     <form method="post" name="myform" id="myform" action="{{ route('cyprus_print_travel_exclusion_form') }}">
          @csrf
          <div class="form-group">
            <label for="inputYpografon">Ο/Η υποφαινόμενος/η</label>
            <input type="text" class="form-control" id="inputYpografon" name="inputYpografon" placeholder="Καταχωρήστε το ονοματεπώνυμό σας">
          </div>
          <div class="form-group">
            <label for="inputBirthdate">Αρ. ταυτότητας/διαβατηρίου</label>
            <input type="text" class="form-control" id="inputIdCard" name="inputIdCard">
          </div>

          <div class="form-group">
            <label for="inputAddress">Διεύθυνση κατοικίας</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress">
         </div>

          <div class="form-group">
            <label for="inputTravelDate">Ημερομηνία</label>
            <input type="text" class="form-control" id="inputTravelDate" name="inputTravelDate">
          </div>

         <div class="form-group">
           <label for="inputTravelTime">Δηλώνω οτι η μετακίνησή μου στις: (δήλωση ακριβούς ώρας)</label>
	   <input type="text" class="form-control" id="inputTravelTime" name="inputTravelTime">
         </div>

         <div class="row">
           <div class="col">
            σχετίζεται με τον ακόλουθο λόγο:<br />
            (σημειώστε √ στο αντίστοιχο πλαίσιο πιο κάτω)
           </div>
         </div>

         <div class="form-group custom-control custom-checkbox mt-3">
            <b>
            <input type="checkbox" class="custom-control-input" id="customCheckFarmakeio" name="customCheckFarmakeio">
            <label class="custom-control-label" for="customCheckFarmakeio">1. Μετάβαση σε φαρμακείο ή για αιμοδοσία ή επίσκεψη σε γιατρό</label>
            </b>
         </div>

         <div class="form-group custom-control custom-checkbox mt-2">
           <b>
           <input type="checkbox" class="custom-control-input" id="customCheckMarket" name="customCheckMarket">
           <label class="custom-control-label" for="customCheckMarket">2. Μετάβαση σε κατάστημα για αγορά ή προμήθεια αγαθών/υπηρεσιών πρώτης ανάγκης</label>
          </b>
         </div>

      <div class="form-group custom-control custom-checkbox mt-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckBank" name="customCheckBank">
        <label class="custom-control-label" for="customCheckBank">3. Μετάβαση σε τράπεζα, στο μέτρο που δεν είναι δυνατή η ηλεκτρονική συναλλαγή</label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckPublicSector" name="customCheckPublicSector">
        <label class="custom-control-label" for="customCheckPublicSector">4. Απόλυτα αναγκαίες επισκέψεις σε κρατικές υπηρεσίες ή υπηρεσίες του ευρύτερου δημόσιου τομέα και της τοπικής αυτοδιοίκησης</label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckHelp" name="customCheckHelp">
        <label class="custom-control-label" for="customCheckHelp">5. Διακίνηση για παροχή βοήθειας σε άτομα που αδυνατούν να αυτοεξυπηρετηθούν ή που οφείλουν να αυτοπροστατευθούν ή βρίσκονται σε αυτοπεριορισμό ή/και σε χώρους υποχρεωτικού περιορισμού (καραντίνα)</label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2 mb-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckGym" name="customCheckGym">
        <label class="custom-control-label" for="customCheckGym">6. Μετακίνηση για σωματική άσκηση ή για τις ανάγκες κατοικίδιου ζώου, εφόσον δεν υπερβαίνουν τα δύο άτομα και περιορίζονται σε γειτνιάζουσες με την κατοικία τους περιοχές</label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2 mb-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckTeleti" name="customCheckTeleti">
        <label class="custom-control-label" for="customCheckTeleti">7. Μετάβαση σε τελετή (π.χ. κηδεία, γάμος, βάφτιση) από συγγενείς πρώτου και δεύτερου βαθμού που δεν υπερβαίνουν τον αριθμό των 10 προσώπων</label>
        </b>
      </div>

      <div class="form-group custom-control custom-checkbox mt-2 mb-2">
        <b>
        <input type="checkbox" class="custom-control-input" id="customCheckOther" name="customCheckOther">
        <label class="custom-control-label" for="customCheckOther">8. Δήλωση οποιουδήποτε άλλου σκοπού μετακίνησης που μπορεί να δικαιολογηθεί με βάση τα μέτρα απαγόρευσης της κυκλοφορίας</label>
        </b>
        <input type="text" class="form-control" id="inputOther" name="inputOther">
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
            var checkBox4 = document.getElementById("customCheckPublicSector");
            var checkBox5 = document.getElementById("customCheckHelp");
            var checkBox6 = document.getElementById("customCheckGym");
            var checkBox7 = document.getElementById("customCheckTeleti");
            var checkBox8 = document.getElementById("customCheckOther");

			var select = '0';
			var name = document.getElementById("inputYpografon").value;
			var idcard = document.getElementById("inputIdCard").value;
			
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
            } else if (checkBox7.checked == true) {
                select = '7';
            } else if (checkBox8.checked == true) {
				select = '8';
			} else {
				select = '';
			}

      saveFormCookies();
			location.href = encodeURI('sms:8998;?&body=' + select + ' ' + idcard + ' ' + 'TK');
		}	

    function saveFormCookies()
    {
      Cookies.set('cookie_inputYpografon', encodeURIComponent($("#inputYpografon").val()), {expires: 90, path: ''})
      Cookies.set('cookie_inputIdCard', encodeURIComponent($("#inputIdCard").val()), {expires: 90, path: '' })
      Cookies.set('cookie_inputAddress', encodeURIComponent($("#inputAddress").val()), {expires: 90, path: '' })
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
        $("#inputIdCard").val(decodeURIComponent(Cookies.get('cookie_inputIdCard') === undefined ? '' : Cookies.get('cookie_inputIdCard')));
        $("#inputAddress").val(decodeURIComponent(Cookies.get('cookie_inputAddress') === undefined ? '' : Cookies.get('cookie_inputAddress')));

        var currentDate = new Date();
        $("#inputTravelDate").val(currentDate.toLocaleDateString('el-GR'));
        var currentTime = currentDate.toLocaleTimeString(navigator.language, {hour: '2-digit', minute:'2-digit'})
           .replace(/(:\d{2}| [AP]M)$/, "");
        $("#inputTravelTime").val(currentTime);
    });

</script>
@endsection
