<style type="text/css">
    .stub-wrapper {
      padding: 10px;
      margin-left: 20px;
      margin-top: 30px;
      height: 520px;
      width: 100%;
      border-radius: 0px;
      background-color: #ccc;
    }

    .stub-wrapper-preview {
      padding: 10px;
      margin-left: 20px;
      margin-top: 30px;
      height: 520px;
      width: 100%;
      border-radius: 0px;
      font-size: 11px;
      background-color: #ccc;
    }

    .stub-comp {
      border:2px dotted #999;
      padding: 10px;
      width: 100%;
      margin-bottom: 5px;
    }

    .stub-comp-plain {
      border:2px solid #fff;
      padding: 10px;
      width: 100%;
      margin-bottom: 5px;
    }

    .stub-inv-id {
      border:2px dotted #999;
      padding: 5px;
      width: 80px;
    }
    .stub-inv-date {
      border:2px dotted #999;
      padding: 5px;
      width: 120px;
    }

    .stub-input-plain {
      border:2px dotted #999;
      padding: 5px;
      width: 90%;
    }

    .stub-input {
      border:2px dotted #999;
      padding: 8px;
      width: 300px;
      margin-bottom: 5px;
    }

    .stub-div {
      width: 100%;
      border-radius: 15px;
      border: 1px solid #999;
    }
  </style>
<div class="row">
  <div class="col-md-12">
    <div class="stub-wrapper row" id="widget" style="background-image: url('{{ asset('images/stubs.jpg') }}')">
      <div class="col-md-6">
        <input type="text" id="company_name" class="stub-comp" placeholder="Type company name" value="Type company name here" required="">
        <span class="preview-stub" id="preview_company_name"></span>
        <br />
        <input type="text" id="company_address" class="stub-comp" placeholder="Type company address" value="Type company name address" required="">
        <span class="preview-stub" id="preview_company_address"></span>
      </div>

      <div class="col-md-6">
        <table class="text-right pull-right">
          <tr>
            <td>
              #<input type="text" id="inv-no" class="stub-inv-id" placeholder="0457" name="" />
              <span class="preview-stub" id="preview-inv-no"></span>
            </td>
          </tr>
          <tr>
            <td><h2>EARNINGS STATEMENT</h2></td>
          </tr>
        </table>
      </div>

      <div class="col-md-12 stub-div">
        <table class="table">
          <tr>
            <td>
              <h5>EMPLOYEE NAME / ADDRESS</h5>
              <input type="text" class="stub-input" id="employee-name" placeholder="Type employee name here" value="Type employee name here">
              <span class="preview-stub" id="preview-employee-name"></span>
              <br />
              <input type="text" class="stub-input" id="employee-address" placeholder="Type employee street address here" value="Type employee street address here">
              <span class="preview-stub" id="preview-employee-address"></span>
            </td>
            <td>
              <br />
              <table class="table">
                <tr>
                  <td>SSN</td>
                  <td>REPORTING PERIOD</td>
                  <td>PAY DATE</td>
                  <td>EMPLOYEE ID</td>
                </tr>
                <tr>
                  <td>
                    <input type="text" class="stub-input-plain" id="stub-ssn" value="ssn" placeholder="ssn">
                    <span class="preview-stub" id="preview-stub-ssn"></span>
                  </td>
                  <td width="40%">
                    <input type="date" class="stub-inv-date" id="report-start-date">
                    <span class="preview-stub" id="preview-report-start-date"></span>
                    <input type="date" class="stub-inv-date" id="report-end-date">
                    <span class="preview-stub" id="preview-report-end-date"></span>
                  </td>
                  <td>
                    <input type="date" class="stub-input-plain" id="pay-date">
                    <span class="preview-stub" id="preview-pay-date"></span>
                  </td>
                  <td>
                    <input type="text" class="stub-input-plain" id="employee-id" placeholder="123">
                    <span class="preview-stub" id="preview-employee-id"></span>
                  </td>
                </tr> 
              </table>
            </td>
          </tr>
        </table>
        <table class="table">
          <tr bgcolor="ligtblue">
            <td>INCOME</td>
            <td>RATE</td>
            <td>HOURS</td>
            <td>CURRENT PAY </td>
            <td>DEDUCTIONS</td>
            <td>TOTAL</td>
            <td>YTD TOTAL</td>
          </tr>
          <tr>
            <td width="30%">GROSS EARNING</td>
            <td>
              <input type="text" class="stub-inv-id" onkeyup="calcuateCheck()" id="stub-rate" value="10">
            </td>
            <td>
              <input type="text" class="stub-inv-id" onkeyup="calcuateCheck()" id="stub-hours" value="40">
            </td>
            <td width="20%">
              <span id="current-pay"></span>
            </td>
            <td width="30%">
              <h5>STATUTORY DEDUCTIONS</h5>
              <span>FICA - MEDICARE</span><br />
              <span>FICA - SOCIAL SECURITY</span><br />
              <span>FEDERAL TAX</span><br />
            </td>
            <td>
              <br /><br />
              <span id="t-fica-m"></span><br />
              <span id="t-fica-s"></span><br />
              <span id="t-fed-tax"></span>
            </td>
            <td>
              <br /><br />
              <span id="y-fica-m"></span><br />
              <span id="y-fica-s"></span><br />
              <span id="y-fed-tax"></span>
            </td>
          </tr>
          <tr bgcolor="lightblue">
            <td>YTD GROSS</td>
            <td width="10%">YTD DEDUCTIONS</td>
            <td></td>
            <td>YTD NET PAY</td>
            <td>TOTAL</td>
            <td>DEDUCTIONS</td>
            <td width="10%">NET PAY</td>
          </tr>
          <tr>
            <td><span id="ytd-gross"></span></td>
            <td><span id="ytd-deductions"></span></td>
            <td></td>
            <td><span id="ytd-net-pay"></span></td>
            <td><span id="ytd-total"></span></td>
            <td><span id="deductions"></span></td>
            <td><span id="net-total"></span></td>
          </tr>
        </table>

        <input type="hidden" id="preview-t-fica-m" name="">
        <input type="hidden" id="preview-t-fica-s" name=""> 
        <input type="hidden" id="preview-t-fed-tax" name=""> 
        <input type="hidden" id="preview-y-fica-m" name=""> 
        <input type="hidden" id="preview-y-fica-s" name=""> 
        <input type="hidden" id="preview-y-fed-tax" name=""> 
        <input type="hidden" id="preview-ytd-gross" name=""> 
        <input type="hidden" id="preview-ytd-deductions" name="">
        <input type="hidden" id="preview-ytd-net-pay" name=""> 
        <input type="hidden" id="preview-ytd-total" name=""> 
        <input type="hidden" id="preview-deductions" name=""> 
        <input type="hidden" id="preview-net-total" name="">
      </div>
    </div>
  </div>
</div>