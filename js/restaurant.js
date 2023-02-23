let counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 2){
        counter = 1;
      }
    }, 4000);

    function myFunction() {
      // Get the text field
      var copyText = document.getElementById("myInput");
    
      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices
    
       // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);
      let a = document.getElementsByClassName('.text-info');
      a.classList.add('active');
    }

    function parentbar(){
      let x = document.getElementById('12')
      if( x.checked == true){
      document.getElementById('15').style.display="flex"
      document.getElementById('19').style.display="none"
      document.getElementById('30').style.display="flex"
        }
      else{
          document.getElementById('15').style.display="none"
          document.getElementById('19').style.display="flex"
          document.getElementById('30').style.display="none"
            }   }

function parentbar2(){
      let j = document.getElementById('13')
      if( j.checked == true){
      document.getElementById('16').style.display="flex"
      document.getElementById('20').style.display="none"
      document.getElementById('31').style.display="flex"
        }
      else{
          document.getElementById('16').style.display="none"
          document.getElementById('20').style.display="flex"
          document.getElementById('31').style.display="none"
            }   }
function parentbar3(){
      let x = document.getElementById('27')
      if( x.checked == true){
      document.getElementById('28').style.display="flex"
      document.getElementById('29').style.display="none"
      document.getElementById('40').style.display="flex"
        }
      else{
          document.getElementById('28').style.display="none"
          document.getElementById('29').style.display="flex"
          document.getElementById('40').style.display="none"
            }   }

            function loader(){
              document.querySelector('.loader-container').classList.add('fade-out');
            }
            
            function fadeOut(){
              setInterval(loader, 2000);
            }
            
            window.onload = fadeOut;