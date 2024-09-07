$('#formContact').submit(function(e) {
    e.preventDefault();
    let data = $(this).serialize();
    
    let firstNumber = parseInt ($('#telephone').val().substring(0, 1));
    
    if(firstNumber == 9){
        Swal.fire({
            icon: 'success',
            title: 'Enviando correo',
            text: ''
        });
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: data,
            success: function(res) {
                var res = JSON.parse(res);
                Swal.fire({
                    icon: res.type,
                    title: 'Gracias!',
                    text: res.msg
                });
                $("#formContact")[0].reset();
            }
        });

    }
    else{
        Swal.fire({
            icon: 'error',
            title: 'telefono incorrecto',
            text: ''
        });

    }
    console.log(firstNumber);
    
   
});

document.addEventListener('DOMContentLoaded', function() {
    const contactTitle = document.getElementById('contactTitle');
    const contactForm = document.getElementById('contactForm');

    if (contactTitle && contactForm) {
        contactTitle.addEventListener('click', function(e) {
            e.preventDefault();
            
            const formPosition = contactForm.getBoundingClientRect().top;
            const startPosition = window.pageYOffset;
            const offset = 50;
            const distance = formPosition + startPosition - offset;
            
            const duration = 1000;
            let start = null;

            function animation(currentTime) {
                if (start === null) start = currentTime;
                const timeElapsed = currentTime - start;
                const run = ease(timeElapsed, startPosition, distance, duration);
                window.scrollTo(0, run);
                if (timeElapsed < duration) requestAnimationFrame(animation);
            }

            // Función de easing para un movimiento más natural
            function ease(t, b, c, d) {
                t /= d / 2;
                if (t < 1) return c / 2 * t * t + b;
                t--;
                return -c / 2 * (t * (t - 2) - 1) + b;
            }

            requestAnimationFrame(animation);
        });
    }
});