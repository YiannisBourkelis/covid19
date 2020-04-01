@extends('base')

@section('main')

<h2 class="text-center">ΒΕΒΑΙΩΣΗ ΚΑΤ’ ΕΞΑΙΡΕΣΗ ΜΕΤΑΚΙΝΗΣΗΣ ΠΟΛΙΤΩΝ</h3>
<p>&nbsp</p>
<p><h4 class="text-center"><u>ΜΕΡΟΣ Α’</u></h4></p>

<table class="table">
  <tbody>

    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Ο/Η υπογράφων-ούσα:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputYpografon}}</h5></td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Ημ/νία γέννησης:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputBirthdate}}</h5></td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Διεύθυνση κατοικίας:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputAddress}}</h5></td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right"><h5>Ώρα μετακίνησης:</h5></td>
      <td class="col"><h5>{{$travelExclusionForm->inputTravelTime}}</h5></td>
    </tr>
  </tbody>
</table>

<p>
<h5>Δηλώνω ότι η μετακίνηση μου σχετίζεται με τον ακόλουθο λόγο: </h5>
<h5>(Σημειώστε Χ στο αντίστοιχο πλαίσιο του Μέρους Β’.)</h5>
<p />

<p>&nbsp</p>
<p><h4 class="text-center"><u>ΜΕΡΟΣ Β’</u></h4></p>

<table class="table">
  <tbody>

    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckFarmakeio)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckFarmakeio) font-weight-bold @endif">Β1 Μετάβαση σε φαρμακείο ή επίσκεψη στον γιατρό, εφόσον αυτό συνιστάται μετά από σχετική επικοινωνία.</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckMarket)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckMarket) font-weight-bold @endif">Β2 Μετάβαση σε εν λειτουργία κατάστημα προμηθειών αγαθών πρώτης ανάγκης, όπου δεν είναι δυνατή η αποστολή τους.</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckBank)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckBank) font-weight-bold @endif">Β3 Μετάβαση στην τράπεζα, στο μέτρο που δεν είναι δυνατή η ηλεκτρονική συναλλαγή.</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckHelp)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckHelp) font-weight-bold @endif">Β4 Κίνηση για παροχή βοήθειας σε ανθρώπους που βρίσκονται σε ανάγκη. </td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckTeleti)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckTeleti) font-weight-bold @endif">Β5 Μετάβαση σε τελετή (π.χ. κηδεία, γάμος, βάφτιση) υπό τους όρους που προβλέπει ο νόμος ή μετάβαση διαζευγμένων γονέων ή γονέων που τελούν σε διάσταση που είναι αναγκαία για τη διασφάλιση της επικοινωνίας γονέων και τέκνων, σύμφωνα με τις κείμενες διατάξεις.</td>
    </tr>
    <tr>
      <td class="col-auto text-nowrap text-right">@if ($travelExclusionForm->customCheckGym)<span class="border">X</span>@endif</td>
      <td class="col @if($travelExclusionForm->customCheckGym) font-weight-bold @endif">B6 Σύντομη μετακίνηση, κοντά στην κατοικία μου, για ατομική σωματική άσκηση (εξαιρείται οποιαδήποτε συλλογική αθλητική δραστηριότητα) ή για τις ανάγκες κατοικιδίου ζώου. </td>
    </tr>
  </tbody>
</table>

<p>&nbsp</p>

<div class="row">
  <div class="col-12">
    <div class="row">
      <div class="col-9">
        <table class="table">
          <tbody>
            <tr>
              <td class="col-auto text-nowrap text-right"><h4>Τόπος:</h4></td>
              <td class="col"><h4>{{$travelExclusionForm->inputPlace}}</h4></td>
            </tr>
            <tr>
              <td class="col-auto text-nowrap text-right"><h4>Ημερομηνία:</h4></td>
              <td class="col"><h4>{{$travelExclusionForm->inputTravelDate}}</h4></td>
            </tr>
            <tr>
              <td class="col-auto text-nowrap text-right"><h4>Ο/Η Δηλών-ούσα:</h4></td>
              <td class="col"><h4>{{$travelExclusionForm->inputYpografon}}</h4></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-3 text-center">
        <h4>Υπογραφή</h4>
      </div>
    </div>
  </div>

</div>

@endsection
