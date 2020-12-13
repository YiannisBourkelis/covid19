@extends('base')

@section('title-tag', 'Χρήσιμοι σύνδεσμοι - Παγκόσμιος χάρτης εξάπλωσης του COVID-19')
@section('description-meta-tag', 'Διαδραστικοί, παγκόσμιοι χάρτες του COVID-19 για την καταγραφή της επιδημίας κατά τη διάρκεια του χρόνου, κατά χώρα και περιοχή. Παγκόσμιος χάρτης εξάπλωσης του COVID-19 με συγκεντρωτικά στοιχεία.')

@section('pre_head_script')
<!-- Δημιουργήθηκε σήμανση JSON-LD από το Βοηθητικό πρόγραμμα για τη σήμανση δομημένων δεδομένων Google. -->
<script type="application/ld+json">
  {
    "@context" : "http://schema.org",
    "@type" : "Article",
    "name" : "Παγκόσμιος χάρτης εξάπλωσης του COVID-19",
    "articleSection" : "Παγκόσμιος χάρτης εξάπλωσης του COVID-19 με συγκεντρωτικά στοιχεία",
    "articleBody" : "Πίνακες με δεδομένα από την παγκόσμια εξάπλωση του COVID-19<BR/>\n  <A href=\"https://covid19dashboards.com\">https://covid19dashboards.com</A>\n  <HR/>\n  <SMALL class=\"text-muted\">Github: <A href=\"https://github.com/github/covid19-dashboard\">https://github.com/github/covid19-dashboard</A></SMALL>\n</DIV>\n\n<DIV class=\"alert alert-success\" role=\"alert\">\n  Προσομείωση της φυσικής πορείας της επιδημίας COVID-19 σε ένα πληθυσμό<BR/>\n  <A href=\"https://alhill.shinyapps.io/COVID19seir/\">https://alhill.shinyapps.io/COVID19seir/</A>\n  <HR/>\n  <SMALL class=\"text-muted\">Github: <A href=\"https://github.com/alsnhll/SEIR_COVID19\">https://github.com/alsnhll/SEIR_COVID19</A></SMALL>\n</DIV>\n\n<DIV class=\"alert alert-success\" role=\"alert\">\n  Δεδομένα εξάπλωσης του COVID-19 στην νότια Αφρική<BR/>\n  <A href=\"https://datastudio.google.com/u/0/reporting/1b60bdc7-bec7-44c9-ba29-be0e043d8534/page/hrUIB\">https://datastudio.google.com/u/0/reporting/1b60bdc7-bec7-44c9-ba29-be0e043d8534/page/hrUIB</A>\n  <HR/>\n  <SMALL class=\"text-muted\">Github: <A href=\"https://github.com/dsfsi/covid19za\">https://github.com/dsfsi/covid19za</A></SMALL>\n</DIV>\n\n<DIV class=\"alert alert-success\" role=\"alert\">\n  Έργα ανοιχτής σχεδίασης για ζωτικής σημασίας"
  }
</script>
@endsection

@section('main')
<div class="alert alert-success" role="alert">
  Παγκόσμια στατιστικά της πανδημίας COVID-19 με γραφήματα και πίνακες, με δυνατότητα ταξινόμισης των αποτελεσμάτων<br />
  <a href="https://www.worldometers.info/coronavirus/">https://www.worldometers.info/coronavirus/</a>
</div>

<div class="alert alert-success" role="alert">
  Διαδραστικός, παγκόσμιος χάρτη του COVID-19 για την καταγραφή της επιδημίας κατά τη διάρκεια του χρόνου, κατά χώρα και περιοχή<br />
  <a href="https://covid19.health">https://covid19.health</a>
  <hr>
  <small class="text-muted">Github: <a href="https://github.com/stevenliuyi/covid19">https://github.com/stevenliuyi/covid19</a></small>
</div>

<div class="alert alert-success" role="alert">
  Παγκόσμιος χάρτης εξάπλωσης του COVID-19<br />
  <a href="https://covid19.locale.ai">https://covid19.locale.ai</a>
  <hr>
  <small class="text-muted">Github: <a href="https://github.com/localeai/covid19-live-visualization">https://github.com/localeai/covid19-live-visualization</a></small>
</div>

<div class="alert alert-success" role="alert">
  Παγκόσμιος χάρτης εξάπλωσης του COVID-19 με συγκεντρωτικά στοιχεία<br />
  <a href="https://chschoenenberger.shinyapps.io/covid19_dashboard/">https://chschoenenberger.shinyapps.io/covid19_dashboard/</a>
  <hr>
  <small class="text-muted">Github: <a href="https://github.com/chschoenenberger/covid19_dashboard">https://github.com/chschoenenberger/covid19_dashboard</a></small>
</div>

<div class="alert alert-success" role="alert">
  Πίνακες με δεδομένα από την παγκόσμια εξάπλωση του COVID-19<br />
  <a href="https://covid19dashboards.com">https://covid19dashboards.com</a>
  <hr>
  <small class="text-muted">Github: <a href="https://github.com/github/covid19-dashboard">https://github.com/github/covid19-dashboard</a></small>
</div>

<div class="alert alert-success" role="alert">
  Προσομείωση της φυσικής πορείας της επιδημίας COVID-19 σε ένα πληθυσμό<br />
  <a href="https://alhill.shinyapps.io/COVID19seir/">https://alhill.shinyapps.io/COVID19seir/</a>
  <hr>
  <small class="text-muted">Github: <a href="https://github.com/alsnhll/SEIR_COVID19">https://github.com/alsnhll/SEIR_COVID19</a></small>
</div>

<div class="alert alert-success" role="alert">
  Δεδομένα εξάπλωσης του COVID-19 στην νότια Αφρική<br />
  <a href="https://datastudio.google.com/u/0/reporting/1b60bdc7-bec7-44c9-ba29-be0e043d8534/page/hrUIB">https://datastudio.google.com/u/0/reporting/1b60bdc7-bec7-44c9-ba29-be0e043d8534/page/hrUIB</a>
  <hr>
  <small class="text-muted">Github: <a href="https://github.com/dsfsi/covid19za">https://github.com/dsfsi/covid19za</a></small>
</div>

<div class="alert alert-success" role="alert">
  Έργα ανοιχτής σχεδίασης για ζωτικής σημασίας νοσοκομειακό εξοπλισμό<br />
  <a href="https://github.com/eellak/covid19-open">https://github.com/eellak/covid19-open</a>
</div>

@endsection
