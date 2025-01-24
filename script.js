document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.img-container');

    buttons.forEach(button => {
      button.addEventListener('click', () => {
        // Remove active class from all buttons
        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filter = button.getAttribute('data-filter');

        // Show/hide projects based on filter
        projects.forEach(project => {
          if (filter === 'all' || project.getAttribute('data-category') === filter) {
            project.classList.add('active');
          } else {
            project.classList.remove('active');
          }
        });
      });
    });
  });


  document.querySelector('.menu-icon').addEventListener('click', function() {
    document.querySelector('.nav-links').classList.toggle('active');
});


// Button click event listener
const buttons = document.querySelectorAll('.Hero_btn button');

buttons.forEach(button => {
  button.addEventListener('click', () => {
    // Remove 'active' class from all buttons
    buttons.forEach(btn => btn.classList.remove('active'));
    
    // Add 'active' class to the clicked button
    button.classList.add('active');
  });
});

// testimonials slide

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#testimonials_splide", {
    type: "loop",
    perPage: 3, // Default for desktop
    autoplay: true,
    breakpoints: {
      768: {
        perPage: 1, // For screens 768px or smaller
      },
    },
  }).mount();
});
// splide_Connectivity slide
document.addEventListener("DOMContentLoaded", function () {
  new Splide("#splide_Connectivity", {
    type: "loop",
    arrows: false,
    perPage: 5,
    autoplay: true,
    breakpoints: {
      768: {
        perPage: 1, // For screens 768px or smaller
      },
    },
  }).mount();
});