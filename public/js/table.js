window.addEventListener("DOMContentLoaded",()=>{
    const barcode = document.getElementById('barcode');
    console.log(barcode);
    console.log(barcode.textContent);

    barcode.addEventListener("input", myEvent);
});

function myEvent(e) {
  console.log(e.target.value);
  const value = e.target.value;
  
  if(value.length == 10){
    document.getElementById('post-barcode').submit();
  }
}

window.addEventListener("DOMContentLoaded",()=>{
    
  Livewire.on('show-modal', function ($order_id) {
    
     $('#exampleModal').modal('show');
  });
});


window.addEventListener("DOMContentLoaded",()=>{
    
  Livewire.on('item', function ($item) {
    
     $('#itemModal').modal('show');
  });


  Livewire.on('closeModal', function () {
    $('#exampleModal').modal('hide');
  });
});

window.addEventListener("DOMContentLoaded",()=>{
    
  Livewire.on('closeModal', function () {
    $('#itemModal').modal('hide');
  });
});

window.addEventListener("DOMContentLoaded",()=>{
    
  Livewire.on('closeModal', function () {
    $('#exampleModal').modal('hide');
  });
});

window.addEventListener("DOMContentLoaded",()=>{
    
  Livewire.on('showMessage', function (message) {
    const alert = document.getElementById('alert');
    alert.innerHTML = message;
    setTimeout(() => {
        alert.remove();
    }, 7000);
    });
});

  

