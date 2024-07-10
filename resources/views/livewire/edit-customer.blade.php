 <div class="card offset-3 col-6 mt-5">
     <div class="card-header">
         Edit Customer
     </div>
     <div class="card-body">
         <form action="" wire:submit="updateCustomer">
             <div class="mb-3">
                 <label for="name" class="form-label">Name</label>
                 <input wire:model="name" type="text" name="name" class="form-control">
                 <div>
                     @error('name')
                         <span class="text-danger">{{ $message }}</span>
                     @enderror
                 </div>
             </div>
             <div class="mb-3">
                 <label for="email" class="form-label">Email</label>
                 <input wire:model="email" type="email" name="email" class="form-control">
                 <div>
                     @error('email')
                         <span class="text-danger">{{ $message }}</span>
                     @enderror
                 </div>
             </div>
             <div class="mb-3">
                 <label for="phone" class="form-label">Phone</label>
                 <input wire:model="phone" type="text" name="phone" class="form-control">
                 <div>
                     @error('phone')
                         <span class="text-danger">{{ $message }}</span>
                     @enderror
                 </div>
             </div>
             <div class="d-flex justify-content-between">
                 <button wire:navigate href="/customers" class="btn btn-secondary  ">Back</button>
                 <button type="submit" class="btn btn-primary">Update</button>
             </div>

         </form>
     </div>
 </div>
