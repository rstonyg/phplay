<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Direct Mail Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
         </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  </nav>
</nav>
<div class="container-fluid">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">U Date</th>
      <th scope="col">Company Name</th>
      <th scope="col">Job ID</th>
      <th scope="col">Job Name</th>
      <th scope="col">Est / Qty</th>
      <th scope="col">Due Date</th>
      <th scope="col">Project Status</th>
      <th scope="col">Coordinator</th>
      <th scope="col">Facility</th>
      <th scope="col">Tasks</th>
      <th scope="col">Print</th>
      <th scope="col">Files</th>
      <th scope="col">Purls</th>
      <th scope="col">Paid</th>
      <th scope="col">S</th>
      <th scope="col">E</th>
      <th scope="col">Delivery</th>
      <th scope="col">Delivery Date</th>
      <th scope="col">Inv.</th>
      <th scope="col">Tracking</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">7/6/2022</th>
      <td>The Lender Friends</td>
      <td>101012</td>
      <td>TLF-Drop 7</td>
      <td>9560/15000</td>
      <td>7/18/2022</td>
      <td><button type="button" class="btn btn-primary">Pre-Analysis</button></td>
      <td>Jerry Jones</td>
      <td>Jim Salesper</td>
      <td>No Vendor Selected</td>
      <td>None</td>
      <td>4/1</td>
      <td>Yes</td>
      <td>No</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Freight</td>
      <td>0/0/000</td>
      <td>Yes</td>
      <td>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tracking
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delivery Scans</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table">
          <thead>
            <tr>
              <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </tr>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Phase</th>
              <th scope="col">Scans</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>First Scan</td>
              <td>1500</td>

            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Second Scan</td>
              <td>500</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Delivery Scan</td>
              <td>3000</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </td>
    </tr>
    <tr class="align-middle">
      <th scope="row" >7/6/2022</th>
      <td>The Lender Friends</td>
      <td>101012</td>
      <td>TLF-Drop 7</td>
      <td>9560/15000</td>
      <td>7/18/2022</td>
      <td><button type="button" class="btn btn-success">Pre-Analysis</button></td>
      <td>Jerry Jones</td>
      <td>Jim Salesper</td>
      <td>No Vendor Selected</td>
      <td>None</td>
      <td>4/1</td>
      <td>Yes</td>
      <td>No</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Freight</td>
      <td>0/0/000</td>
      <td>Yes</td>
      <td>
        <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tracking
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delivery Scans</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Phase</th>
                <th scope="col">Scans</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>First Scan</td>
                <td>1500</td>
  
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Second Scan</td>
                <td>500</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Delivery Scan</td>
                <td>3000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        </td>
    </tr>
    <tr class="align-middle">
      <th scope="row">7/6/2022</th>
      <td>The Lender Friends</td>
      <td>101012</td>
      <td>TLF-Drop 7</td>
      <td>9560/15000</td>
      <td>7/18/2022</td>
      <td><button type="button" class="btn btn-warning">Pre-Analysis</button></td>
      <td><span class="border rounded-circle border-5 border-warning">Hello</span></td>
      <td>Jim Salesper</td>
      <td>No Vendor Selected</td>
      <td>None</td>
      <td>4/1</td>
      <td>Yes</td>
      <td>No</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Freight</td>
      <td>0/0/000</td>
      <td>Yes</td>
      <td>
        <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tracking
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delivery Scans</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Phase</th>
                <th scope="col">Scans</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>First Scan</td>
                <td>1500</td>
  
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Second Scan</td>
                <td>500</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Delivery Scan</td>
                <td>3000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        </td>
    </tr>
    <tr>
      <th scope="row">7/6/2022</th>
      <td>The Lender Friends</td>
      <td>101012</td>
      <td>TLF-Drop 7</td>
      <td>9560/15000</td>
      <td>7/18/2022</td>
      <td><button type="button" class="btn btn-danger">Pre-Analysis</button></td>
      <td>Jerry Jones</td>
      <td>Jim Salesper</td>
      <td>No Vendor Selected</td>
      <td>None</td>
      <td>4/1</td>
      <td>Yes</td>
      <td>No</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Freight</td>
      <td>0/0/000</td>
      <td>Yes</td>
      <td>
        <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tracking
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delivery Scans</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Phase</th>
                <th scope="col">Scans</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>First Scan</td>
                <td>1500</td>
  
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Second Scan</td>
                <td>500</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Delivery Scan</td>
                <td>3000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        </td>
    </tr>
    <tr>
      <th scope="row">7/6/2022</th>
      <td>The Lender Friends</td>
      <td>101012</td>
      <td>TLF-Drop 7</td>
      <td>9560/15000</td>
      <td>7/18/2022</td>
      <td><button type="button" class="btn btn-info">Pre-Analysis</button></td>
      <td>Jerry Jones</td>
      <td>Jim Salesper</td>
      <td>No Vendor Selected</td>
      <td>None</td>
      <td>4/1</td>
      <td>Yes</td>
      <td>No</td>
      <td>Yes</td>
      <td>Yes</td>
      <td>Freight</td>
      <td>0/0/000</td>
      <td>Yes</td>
      <td>
        <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tracking
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delivery Scans</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <table class="table">
            <thead>
              <tr>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
              </tr>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Phase</th>
                <th scope="col">Scans</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>First Scan</td>
                <td>1500</td>
  
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Second Scan</td>
                <td>500</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Delivery Scan</td>
                <td>3000</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        </td>
    </tr>

  </tbody>
</table>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>