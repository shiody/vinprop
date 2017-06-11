<!DOCTYPE html>
    <style type="text/css">
        body {
          font-family: "Helvetica Neue", Helvetica, Arial;
          font-size: 14px;
          line-height: 20px;
          font-weight: 400;
          color: #3b3b3b;
          -webkit-font-smoothing: antialiased;
          font-smoothing: antialiased;
          background: #ffffff;
        }

        .wrapper {
          margin: 0 auto;
          padding: 40px;
          max-width: 800px;
        }

        .table {
          margin: 0 0 40px 0;
          width: 100%;
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
          display: table;
        }
        @media screen and (max-width: 580px) {
          .table {
            display: block;
          }
        }

        .row {
          display: table-row;
          background: #f6f6f6;
        }
        .row:nth-of-type(odd) {
          background: #e9e9e9;
        }
        .row.header {
          font-weight: 900;
          color: #009688;
          background: #ea6153;
        }
        @media screen and (max-width: 580px) {
          .row {
            padding: 8px 0;
            display: block;
          }
        }

        .cell {
          padding: 6px 12px;
          display: table-cell;
        }
        @media screen and (max-width: 580px) {
          .cell {
            padding: 2px 12px;
            display: block;
          }
        }
    </style>
    <body>
        <div class="wrapper">
  
          <div class="table">
            
            <div class="row header">
              <div class="cell">
                Name
              </div>
              <div class="cell">
                List Type
              </div>
              <div class="cell">
                Property Type
              </div>
              <div class="cell">
                Location
              </div>
              <div class="cell">
                Created
              </div>
            </div>
            
            @foreach ($properties as $property)
            <div class="row">
              <div class="cell">
                {{ $property->prop_name }}
              </div>
              <div class="cell">
                {{ $property->list_type->list_type_name }}
              </div>
              <div class="cell">
                {{ $property->property_type->prop_type_name }}
              </div>
              <div class="cell">
                {{ $property->location->location_name }}
              </div>
              <div class="cell">
                {{ $property->created_at}}
              </div>
            </div>
            @endforeach
            
          </div>
          
        </div>
    </body>
</html>
