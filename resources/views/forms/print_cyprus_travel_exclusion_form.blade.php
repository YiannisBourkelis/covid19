@extends('base')

@section('main')

<h2 class="text-center">ΔΗΛΩΣΗ ΚΑΤ’ ΕΞΑΙΡΕΣΗ ΜΕΤΑΚΙΝΗΣΗΣ ΠΟΛΙΤΩΝ</h3>
<p>&nbsp</p>

<table class="table">
  <tbody>

    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Ο/Η υπογράφων-ούσα:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputYpografon}}</h5></td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Αρ. ταυτότητας/διαβατηρίου:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputIdCard}}</h5></td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Διεύθυνση κατοικίας:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputAddress}}</h5></td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Ώρα μετακίνησης:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputTravelTime}}</h5></td>
    </tr>
  </tbody>
</table>

<p>
<h5>Δηλώνω ότι η μετακίνηση μου σχετίζεται με τον ακόλουθο λόγο:</h5>
<h5>(Σημειώστε Χ στο αντίστοιχο πλαίσιο.)</h5>
</p>

<p>&nbsp</p>

<table class="table">
  <tbody>

    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckFarmakeio)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckFarmakeio) font-weight-bold @endif">1. Μετάβαση σε φαρμακείο ή για αιμοδοσία ή επίσκεψη σε γιατρό</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckMarket)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckMarket) font-weight-bold @endif">2. Μετάβαση σε κατάστημα για αγορά ή προμήθεια αγαθών/υπηρεσιών πρώτης ανάγκης</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckBank)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckBank) font-weight-bold @endif">3. Μετάβαση σε τράπεζα, στο μέτρο που δεν είναι δυνατή η ηλεκτρονική συναλλαγή</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckPublicSector)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckPublicSector) font-weight-bold @endif">4. Απόλυτα αναγκαίες επισκέψεις σε κρατικές υπηρεσίες ή υπηρεσίες του ευρύτερου δημόσιου τομέα και της τοπικής αυτοδιοίκησης</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckHelp)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckHelp) font-weight-bold @endif">5. Διακίνηση για παροχή βοήθειας σε άτομα που αδυνατούν να αυτοεξυπηρετηθούν ή που οφείλουν να αυτοπροστατευθούν ή βρίσκονται σε αυτοπεριορισμό ή/και σε χώρους υποχρεωτικού περιορισμού (καραντίνα)</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckGym)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckGym) font-weight-bold @endif">6. Μετακίνηση για σωματική άσκηση ή για τις ανάγκες κατοικίδιου ζώου, εφόσον δεν υπερβαίνουν τα δύο άτομα και περιορίζονται σε γειτνιάζουσες με την κατοικία τους περιοχές</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckTeleti)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckTeleti) font-weight-bold @endif">7. Μετάβαση σε τελετή (π.χ. κηδεία, γάμος, βάφτιση) από συγγενείς πρώτου και δεύτερου βαθμού που δεν υπερβαίνουν τον αριθμό των 10 προσώπων</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckOther)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckOther) font-weight-bold @endif">8. Δήλωση οποιουδήποτε άλλου σκοπού μετακίνησης που μπορεί να δικαιολογηθεί με βάση τα μέτρα απαγόρευσης της κυκλοφορίας
        <p>{{$travelExclusionForm->inputOther}}</p>
      </td>
    </tr>
  </tbody>
</table>

<p>&nbsp</p>
<p>&nbsp</p>

<div class="row">
  <div class="col-12">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <tbody>
            <tr>
              <td class="col-auto text-nowrap text-right"><h4>Υπογραφή υποφαινόμενου/ης:</h4></td>
              <td class="col">.....................................................</td>
            </tr>
            <tr>
              <td class="col-auto text-nowrap text-right"><h4>Ημερομηνία:</h4></td>
              <td class="col"><h4>{{$travelExclusionForm->inputTravelDate}}</h4></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection
