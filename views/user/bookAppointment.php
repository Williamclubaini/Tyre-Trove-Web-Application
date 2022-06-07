<main class="main users chart-page" id="skip-target">
          <div class="container">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <header>
                      <h4 class="fw-normal text-capitalize">book an appointment</h4>
                  </header>
              </div>
              <br><br>
            <form method="POST" class="col-12 col-lg-10 my-blue-theme row border rounded p-1 p-lg-3 g-2">
                  <div class="col-md-12">
                    <label for="inputPassword4" class="form-label text-light">What type of vehicle are we servicing?</label>
                    <select class="form-select" name="vehicle" aria-label="Default select example" required>
                        <option value="Car">Car</option>
                        <option value="Truck">Truck</option>
                        <option value="Bus">Bus</option>
                        <option value="Motorcycle">Motorcycle</option>
                      </select>
                  </div> 
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label text-light">Visiting Day</label>
                    <select class="form-select" name="visitday" aria-label="Default select example" required>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                      </select>
                      <span class="text-warning fw-bold" style="font-size:12px!important;">NOTE:we will notify you if we are busy on that particular day.</span>
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label text-light">What are we servicing?</label>
                    <input type="text" name="servicing" class="form-control" placeholder="For example, Engine, Tyres, Fan..." required>
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label text-light">State vehicle problem</label>
                    <textarea name="problem" class="form-control" placeholder="If possible state your vehicle problem" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                <div class="col-12 text-center text-lg-start p-2">
                  <button type="submit" name="book" class="btn w-50 btn-outline-light">Book Now</button>
                </div>
              </form>
          </div>
        </main>