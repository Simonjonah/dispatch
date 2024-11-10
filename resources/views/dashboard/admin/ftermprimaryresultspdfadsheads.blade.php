@include('dashboard.admin.header')

  <!-- Main Sidebar Container -->
  @include('dashboard.admin.sidebar')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

@php
  
$totalresultforavsonliteracy = 0;
  $totalclassavgscorefornumercy = 0;
  $total_classaveragefornone = 0;
  $total_classaverageforcca = 0;
@endphp

@foreach ($getyour_results as $getyour_result)
    @if ($getyour_result->status == 'approved' || $getyour_result->status == null)
       
   
    @else
   
    @endif
@endforeach




@foreach ($results_forcats as $results_forcat)
    @if ($results_forcat->status == 'approved' || $results_forcat->status == null && $results_forcat->category == 'MATHEMATICAL SKILL')
       
    @else
    @endif
@endforeach


@foreach ($results_totalforliteracyonavgs as $results_totalforliteracyonavg)
    @if ($results_totalforliteracyonavg->status == 'approved' || $results_totalforliteracyonavg->status == null && $results_totalforliteracyonavg->category == 'MATHEMATICAL SKILL')
       
    @else
    @endif
@endforeach



@foreach ($results_fornums as $results_fornum)
    @if ($results_fornum->status == 'approved' || $results_fornum->status == null && $results_fornum->status == 'LANGUAGE SKILL')
       
    @else
    @endif
@endforeach


{{-- @foreach ($totalclassavgfornumercys as $totalclassavgfornumercy)
    @if ($totalclassavgfornumercy->status == 'approved' || $totalclassavgfornumercy->status == null && $totalclassavgfornumercy->category == 'LANGUAGE SKILL')
       
    @else
    @endif
@endforeach --}}




@foreach ($results_fornones as $results_fornone)
    @if ($results_fornone->status == 'approved' || $results_fornone->status == null && $results_fornone->category == 'NURSERY RHYMES')
      
    @else
    @endif
@endforeach

{{-- @foreach ($totalresults_noneonavges as $totalresults_noneonavge)
    @if ($totalresults_noneonavge->status == 'approved' || $totalresults_noneonavge->status == null && $totalresults_noneonavge->status == 'None')

    @else
    @endif
@endforeach--}}


@foreach ($results_forccas as $results_forcca)
    @if ($results_forcca->status == 'approved' || $results_forcca->status == null && $results_forcca->category == 'FRENCH')
       
    @else
    @endif
@endforeach


{{--@foreach ($results_classaverageforccas as $results_classaverageforcca)
    @if ($results_classaverageforcca->status == 'approved' || $results_classaverageforcca->status == null && $results_classaverageforcca->status == 'CCA')
       
    @else
    @endif
@endforeach --}}









<style>

.result .colsfor{
  display: inline-block;

}
    /* table{
    width:200px;
    height:auto;
    table-layout:fixed;
} */
td {
  height: 3px; /* Adjust the height as per your requirements */
}
tr {
  height: 3px; /* Adjust the height as per your requirements */
}

td {
    margin: 0px;
  padding-top: 0px;
  padding-bottom: 0px;
}
table, th {
    border: 1px solid black;
  border-collapse: collapse;
}
table, td {
  border: 1px solid black;
  border-collapse: collapse;
  font-size: 12px;
  text-align: center;
  /* height:10px;
  padding: 0px;
  margin: 0px; */
}
table .b{
    border-style: none;
}
/* .dayopen, .von{
    font-size: 15px;
} */
table, tr, td{
    margin: 0;
    padding: 0;
}

</style>
<body>

   
        

        
             
   @php
   $total_scoremaths = 0;
   $total_scoreforliteracy = 0;
   $total_scorefornumeracy = 0;
   $total_fornone = 0;
   $total_forcca = 0;


@endphp
    
   



    
    <?php 
    $total_score = 0;

    ?>
    <table class="table">

    <tr>
        <th style="text-align: center; width: 120px; height: 100px; padding: 0px">
            <img style="width: 100px; height: 100px;" src="{{ asset('front/images/logo.jpg')}}">
        </th>

        <th style="text-align: center; width: 1500px;"><h3>GRACE OF GOD INTERNATIONAL SCHOOL - GOGIS</h3>
            <p style="font-weight: normal; margin-bottom: -2px;">
                61 Ntiendo Udosen Street, P.O.Box 2666 Uyo 
                Akwa Ibom State, Nigeria <br>
                Website: gogischools.org
               
                </p>
            {{-- <p  style="font-weight: normal; font-style:italic">Motor: Fostering Creativity and Development</p>  --}}
        </th>
            
        <th style="text-align: center">
            <img style="width: 100px; height: 100px;" src="{{ asset('public/../'.$getyour_result->images) }}">
        </th>
    </tr>
   

        <tr>
            <th colspan="2" style="text-align: center; text-transform: uppercase;">{{ $getyour_result->term }} REPORT FOR {{ $getyour_result->academic_session }} <br>
                {{ $getyour_result->surname }}, {{ $getyour_result->fname }} {{ $getyour_result->middlename }}
            </th>
            <th>-</th>
        </tr>
</table>

    
    <?php 
    $total_score = 0; ?>

                         <style>
        
                        .container .row .col .psy{
                            width: 300px;
                            display: inline-block;
                        }
                
                        .topto{
                          position: relative;
                          top: 0px;
                        }
                
                        .top2{
                          position: relative;
                          top: 1px;
                        }
                      </style>
                      
                      <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="psy">
                                  <table id="myTable">
                                    <tr>
                                      <th>SUBJECTS </th>
                                      <th>TEST 30%</th>
                                      <th>EXAM 70%</th>
                                      <th>TOTAL</th>
                                      <th>-</th>
                                      <th>REMARKS</th>
                                    </tr>
                                  
                                    <td colspan="6" style="text-align: left" ><b>MATHEMATICAL SKILL</b></td>
                                    @foreach ($results_forcats as $results_forcat)
                                        @if ($results_forcat->status == 'approved' || $results_forcat->status == null)
                                            @php
                                            $total_scoremaths +=$results_forcat->test_1 + $results_forcat->test_2 + $results_forcat->exams;
                                            //$total_scoreforliteracy +=$results_forcat->test_1 + $results_forcat->test_2 + $results_forcat->exams;
                                            
                                            //$totalresultforavsonliteracy +=$results_totalforliteracyonavg->test_1 + $results_totalforliteracyonavg->test_2 + $results_totalforliteracyonavg->exams;
                                            
                                            @endphp
                                    
                                      @if ($results_forcat->category == 'MATHEMATICAL SKILL')
                                      <tr>
                                          <td style="text-align: left; width: 145px; font-size: 16px;">{{ $results_forcat->subjectname }}</td>
                                          <td style="width: 45px; font-size: 16px;">{{ $results_forcat->test_1  }}</td>
                                          <td style="width: 45px; font-size: 16px;">{{ $results_forcat->exams }}</td>
                    
                                          <td style="width: 45px; font-size: 16px;">{{ $results_forcat->test_1 + $results_forcat->exams }}</td>
                      
                                          <td style="width: 45px; font-size: 16px;">
                                            @if ($results_forcat->test_1 + $results_forcat->exams > 69)
                                            <td style="width: 80px; font-size: 16px;">Excellent</td>
                                            @elseif ($results_forcat->test_1 + $results_forcat->exams > 59)
                                            <td style="width: 80px; font-size: 16px;">Good</td>
                                          
                                            @elseif ($results_forcat->test_1 + $results_forcat->exams > 49)
                                            <td style="width: 80px; font-size: 16px;">Fair</td>
                                            @elseif ($results_forcat->test_1 + $results_forcat->exams > 44)
                                            <td style="width: 80px; font-size: 16px;">Poor</td>
                                            @elseif ($results_forcat->test_1 + $results_forcat->exams > 39)
                                            <td style="width: 80px; font-size: 16px;">V.Poor </td>
                                          
                                            @else
                                            <td style="width: 80px; font-size: 16px;">V.Poor</td>
                                          @endif</td>
                                        
                                        </tr>
                                      @else
                                      @endif 
                                      
                                @endif
                                
                                @endforeach
                              
                                </table>




                                <table id="myTable">
                                  <td colspan="6" style="text-align: left"><b>LANGUAGE SKILL</b></td>
                                  @foreach ($results_fornums as $results_fornum)
                                      @if ($results_fornum->status == 'approved' || $results_fornum->status == null)
                                          @php
                                          $total_scorefornumeracy +=$results_fornum->test_1 + $results_fornum->test_2 + $results_fornum->exams;
                                          
                                          @endphp
                                     @if ($results_fornum->category == 'LANGUAGE SKILL')
                                     <tr>
                                        <td style="text-align: left; width: 145px; font-size: 16px;">{{ $results_fornum->subjectname }}</td>
                                        <td style="width: 45px; font-size: 16px;">{{ $results_fornum->test_1  }}</td>
                                        <td style="width: 45px; font-size: 16px;">{{ $results_fornum->exams }}</td>
                                        <td style="width: 45px; font-size: 16px;">{{ $results_fornum->test_1 + $results_fornum->exams}}</td>
                          
                                        <td style="width: 45px; font-size: 16px;">
                                          @if ($results_fornum->test_1 + $results_fornum->exams > 69)
                                          <td style="width: 80px; font-size: 16px;">Excellent</td>
                                          @elseif ($results_fornum->test_1 + $results_fornum->exams > 59)
                                          <td style="width: 80px; font-size: 16px;">Good</td>
                                        
                                          @elseif ($results_fornum->test_1 + $results_fornum->exams > 49)
                                          <td style="width: 80px; font-size: 16px;">Fair</td>
                                          @elseif ($results_fornum->test_1 + $results_fornum->exams > 44)
                                          <td style="width: 80px; font-size: 16px;">Poor</td>
                                          @elseif ($results_fornum->test_1 + $results_fornum->exams > 39)
                                          <td style="width: 80px; font-size: 16px;">V.Poor </td>
                                        
                                          @else
                                          <td style="width: 80px; font-size: 16px;">V.Poor</td>
                                        @endif</td>
                                       
                                      </tr>
                                    @else
                                    @endif 
                                    
                              @endif
                              
                              @endforeach
                             
                              </table>

                              

                              <table id="myTable">
                                <td colspan="6" style="text-align: left"><b>NURSERY RHYMES</b></td>
                                @foreach ($results_fornones as $results_fornone)
                                    @if ($results_fornone->status == 'approved' || $results_fornone->status == null)
                                        @php
                                        $total_fornone +=$results_fornone->test_1 + $results_fornone->test_2 + $results_fornone->exams;
                                        
                                        // $total_classaveragefornone +=$totalresults_noneonavge->test_1 + $totalresults_noneonavge->test_2 + $totalresults_noneonavge->exams;
                                        
                                        @endphp
                                        @if ($results_fornone->category == 'NURSERY RHYMES')
                                   <tr>
                                      <td style="text-align: left; width: 145px; font-size: 16px;">{{ $results_fornone->subjectname }}</td>
                                      <td style="width: 45px; font-size: 16px;">{{ $results_fornone->test_1  }}</td>
                                      <td style="width: 45px; font-size: 16px;">{{ $results_fornone->exams }}</td>
                                      <td style="width: 45px; font-size: 16px;">{{ $results_fornone->test_1 + $results_fornone->exams }}</td>
                                      <td style="width: 45px; font-size: 16px; font-size: 16px;">
                                        @if ($results_fornone->test_1 + $results_fornone->exams > 69)
                                        <td style="width: 80px; font-size: 16px;">Excellent</td>
                                        @elseif ($results_fornone->test_1 + $results_fornone->exams > 59)
                                        <td style="width: 80px; font-size: 16px;">Good</td>
                                      
                                        @elseif ($results_fornone->test_1 + $results_fornone->exams > 49)
                                        <td style="width: 80px; font-size: 16px;">Fair</td>
                                        @elseif ($results_fornone->test_1 + $results_fornone->exams > 44)
                                        <td style="width: 80px; font-size: 16px;">Poor</td>
                                        @elseif ($results_fornone->test_1 + $results_fornone->exams > 39)
                                        <td style="width: 80px; font-size: 16px;">V.Poor </td>
                                      
                                        @else
                                        <td style="width: 80px; font-size: 16px;">V.Poor</td>
                                      @endif</td>
                                     
                                     
                                    </tr>
                                  @else
                                  @endif 
                                  
                            @endif
                            
                            @endforeach
                            
                            </table>


                            <table id="myTable">
                              <td colspan="6" style="text-align: left"><b>FRENCH</b></td>
                              @foreach ($results_forccas as $results_forcca)
                                  @if ($results_forcca->status == 'approved' || $results_forcca->status == null)
                                      @php
                                      $total_forcca +=$results_forcca->test_1 + $results_forcca->test_2 + $results_forcca->exams;
                                      
                                      // $total_classaverageforcca +=$results_classaverageforcca->test_1 + $results_classaverageforcca->test_2 + $results_classaverageforcca->exams;
                                      
                                      @endphp
                                      @if ($results_forcca->category == 'FRENCH')
                                 <tr>
                                    <td style="text-align: left; width: 145px; font-size: 16px">{{ $results_forcca->subjectname }}</td>
                                    <td style="width: 45px; font-size: 16px;">{{ $results_forcca->test_1  }}</td>
                                    <td style="width: 45px; font-size: 16px;">{{ $results_forcca->exams }}</td>
                                    <td style="width: 45px; font-size: 16px;">{{ $results_forcca->test_1 + $results_forcca->exams }}</td>
                      
                                    <td style="width: 45px; font-size: 16px; font-size: 16px;">
                                      @if ($results_forcca->test_1 + $results_forcca->exams > 69)
                                      <td style="width: 80px; font-size: 16px;">Excellent</td>
                                      @elseif ($results_forcca->test_1 + $results_forcca->exams > 59)
                                      <td style="width: 80px; font-size: 16px;">Good</td>
                                    
                                      @elseif ($results_forcca->test_1 + $results_forcca->exams > 49)
                                      <td style="width: 80px; font-size: 16px;">Fair</td>
                                      @elseif ($results_forcca->test_1 + $results_forcca->exams > 44)
                                      <td style="width: 80px; font-size: 16px;">Poor</td>
                                      @elseif ($results_forcca->test_1 + $results_forcca->exams > 39)
                                      <td style="width: 80px; font-size: 16px;">V.Poor </td>
                                    
                                      @else
                                      <td style="width: 80px; font-size: 16px;">V.Poor</td>
                                    @endif</td>
                                  </tr>
                                @else
                                @endif 
                                
                          @endif
                          
                          @endforeach
                          <td><b>TOTAL</b></td>
                          <td>-</td>
                          <td>-</td>
                          <td><b>{{ $total_scoremaths + $total_scorefornumeracy + $total_fornone + $total_forcca}}</b></td>
                          <td>-</td>
                          <td>-</td>
                          </table>
                      
                            
                              

                                </div>
                
                                <div class="psy">
                                    <table class="top2 table">
                                        <tr>
                                            <th>-</th>
                                            <th colspan="5">KEY TO RATING</th>
                                          </tr>
                                         
                                          <tr>
                                            <td><b>BEHAVIOUR/SKILLS</b>
                                            </td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                          </tr>
                                          <tr>
                                            <td style="font-size: 16px;">Mental Alertness</td>
                                                @if ($view_results->mentalalert1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->mentalalert2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->mentalalert3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->mentalalert4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                                @if ($view_results->mentalalert5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                                
                                          </tr>
                        
                                          <td style="font-size: 16px;">Punctuality</td>
                                                @if ($view_results->punt1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->punt2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->punt3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->punt4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->punt5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                          </tr>
                                          <tr>
                                              <td style="font-size: 16px;">Respect</td>
                                              @if ($view_results->respect1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->respect2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->respect3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->respect4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->respect5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                          </tr>
                              
                                          <tr>
                                              <td style="font-size: 16px;">Neatness</td>
                                              @if ($view_results->neat1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->neat2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->neat3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->neat4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->neat5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                              
                                          </tr>
                                              <td style="font-size: 16px;">Politeness</td>
                                              @if ($view_results->polite1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->polite2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->polite3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->polite4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->polite5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                              
                                            
                                          </tr>
                              
                                          <tr>
                                              <td style="font-size: 16px;">Honesty</td>
                                              @if ($view_results->honesty1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->honesty2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->honesty3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->honesty4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->honesty5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                          </tr>
                                          <tr>
                                              <td style="font-size: 16px;">Relationship with Peers</td>
                                              @if ($view_results->relationship1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->relationship2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->relationship3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->relationship4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->relationship5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                          </tr>
                              
                                          <tr>
                                              <td style="font-size: 16px;">Williness</td>
                                              @if ($view_results->williness1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->williness2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->williness3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->williness4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->williness5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                          </tr>
                              
                                          <tr>
                                              <td style="font-size: 16px;">Team Spirit</td>
                                              @if ($view_results->teamspirit1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->teamspirit2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->teamspirit3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->teamspirit4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->teamspirit5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                          </tr>
                              
                                          <tr>
                                            <td style="font-size: 16px;">Verbal Skill</td>
                                                @if ($view_results->verbal1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->verbal2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->verbal3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->verbal4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->verbal5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                          </tr>
                        
                                          <td style="font-size: 16px;">Games & Sports</td>
                                                @if ($view_results->sports1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->sports2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->sports3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->sports4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                @if ($view_results->sports5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                                               
                                          </tr>
                                          <tr>
                                              <td style="font-size: 16px;">Arts & Craft</td>
                                              @if ($view_results->arts1 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->arts2 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->arts3 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                        
                                                @if ($view_results->arts4 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                
                                                 @if ($view_results->arts5 == 'Yes')
                                                <td style="font-size: 16px;"><i class="fas fa-check"></i> </td>
                                                @else
                                                <td style="font-size: 16px;"></td>
                                                @endif
                              
                                              
                                          </tr>
                                        <tr>
                                         
                                      </table>
                                </div>
                
                
                                <div class="psy" style="margin-left: 0px">
                                    <table class="table" style="margin-left: 35px">
                                        <tr>
                                          <th colspan="3">SOCIAL BEHAVIOUR AND MANIPULATING SKILLS (SBMS)</th>
                                          <th colspan="2">KEY:</th>
                                        </tr>
                                        <tr>
                
                                          <td>1</td>
                                          <td>2</td>
                                          <td>3</td>
                                          <td>4</td>
                                          <td>5</td>
                            
                                        </tr> 
                
                                        <tr>
                                            <td style="font-size: 16px;"> Poor</td>
                                            <td style="font-size: 16px;"> V.Poor</td>
                                            <td style="font-size: 16px;"> Fair</td>
                                            <td style="font-size: 16px;"> Good</td>
                                            <td style="font-size: 16px;"> Exellence</td>
                                            
                                            
                                        </tr>
                                       
                                      </table>
                                </div>
                            </div>
                        </div>
                      </div>
                      
                
                      </table>
                
                    <span style="color: red"> Times School Opened: {{ $view_results->schoolopen }}</span> <br>
                  <span style="color: red">Times School Present:{{ $view_results->timespresent }}</span> <br>
                  <span style="color: red">Times School Absent: {{ $view_results->timeabsent }}</span> <br>
                
                
                
                
                  <table>
                    <tr>
                        <td style="font-size: 16px;">REG CODE:</td>
                        <td style="font-size: 16px;">{{ $getyour_result->regnumber }}</td>
                        <td style="font-size: 16px;">SEX:</td>
                        <td style="font-size: 16px;">{{ $getyour_result->user['gender'] }}</td>
                       
                    </tr>
            
                    <tr>
                        <td style="font-size: 16px;">CLASS:</td>
                        <td style="font-size: 16px;">{{ $getyour_result->classname }}</td>
                        <td style="font-size: 16px;">TERM:</td>
                        <td style="font-size: 16px;">{{ $getyour_result->term }} </td>
                      </tr>
                        <td style="font-size: 16px;">NEXT TERM BEGIN:</td>
                       <td style="font-size: 16px;">{{ $view_results->nextterm }}</td>

                       <td style="font-size: 16px;">AVERAGE:</td>
                       <td style="font-size: 16px;">{{ $total_scoremaths + $total_scorefornumeracy + $total_fornone + $total_forcca / $totalstudentInClass}}</td>
                       <tr>
                    <tr>
                        <td style="font-size: 16px;">DATE OF BIRTH:</td>
                        <td style="font-size: 16px;">{{ $getyour_result->user['dob'] }}</td>
                        
                    </tr>
                    <tr>
                        <td style="font-size: 16px;">NO. OF PUPILS IN CLASS:</td>
                        <td style="font-size: 16px;">{{ $totalstudentInClass }}</td>
                        
                    </tr>
                    
                    
                
            
                 </table>
            
                  
                  
             
                 <table style="margin-top: 2px;">
                  <tr>
                      <td> Teacher's Comment</td>
                      <td>{{ $view_results->headteacher_comment}} </td>
                      
                  <td>Signature: 
                      <img style="width: 100px; height: 50px;" src="{{ asset('assets/dist/img/signature.png')}}">
                  
                  </tr>
          
                  <table style="margin-top: 2px;">
                 
                  <tr>
                      <td>Head Teacher's Comment</td>
                      <td>{{ $getyour_result->headteacher_comment }}	</td>							
                      
                  <td>
                     
                  <a class="btn btn-primary" href="{{ url('admin/addcommentadmin/'.$getyour_result->id) }}">Add Comment</a>
                 </td>
                  </tr>
      
              </table>
      
                    


                
                
                </div>

            </div>
{{-- where the footer stat --}}



            
        </div>
    </div>


    
 
           <!-- /.content-wrapper -->
 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2024 <a href="#">GOGIS</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="../../assets/plugins/jquery/jquery.min.js"></script>

<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../../assets/dist/js/adminlte.min.js?v=3.2.0"></script>

<script src="../../assets/dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
















