{{-- @extends('layouts.app') --}}
<div>
  <section>
      <div class="container">
          <div class="row">
             <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h3>
                          All students
                          <a class="btn btn-sm btn-primary" href="{{ route('app.student.create') }}">student create</a>
                      </h3>
                      
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="firstname" wire:model="firstname" name="firstname" aria-describedby="emailHelp" placeholder="First Name">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" wire:model="lastname" name="lastname" aria-describedby="emailHelp" placeholder="Last Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Last Name</label>
                        <input type="email" class="form-control" id="email" wire:model="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <label for="phone">Last Name</label>
                        <input type="text" class="form-control" id="phone" wire:model="phone" name="phone" aria-describedby="emailHelp" placeholder="Phone">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
              </div>
             </div>
          </div>
      </div>
  </section>
</div>
