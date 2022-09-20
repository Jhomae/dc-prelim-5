<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add Weather</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='today'>
             <label for="today">Today Weather Name</label>
             @error('today')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='wind'>
             <label for="wind">wind</label>
             @error('price')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>


         <div class="form-floating mb-3">
            <select name="percentage" class="form-select" wire:model.defer='percentage'>
             <option hidden="true">Select percentage</option>
             <option selected disabled>Select percentage</option>
             <option value="10">10</option>
             <option value="30">30</option>
             <option value="50">50</option>
             <option value="100">100</option>
            </select>
         </div>

          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addWeather()'>
                 Add
             </button>
          </div>
     </div>
    </div>
 </div>
