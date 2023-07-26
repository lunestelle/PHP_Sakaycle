$(document).ready(function() {
  let currentUrl = new URL(window.location.href);
  let navLinks = $('.sidebar .nav-link');

  navLinks.each(function() {
    let linkUrl = $(this).attr('href');

    if (linkUrl.includes('taripa')) {
      if (currentUrl.href.includes(linkUrl)) {
        $(this).addClass('nav-link-active');
      } else {
        $(this).removeClass('nav-link-active');
      }
    } else {
      if (currentUrl.href.includes('new_tricycle') && linkUrl.includes('tricycles') || currentUrl.href.includes('new_driver') && linkUrl.includes('drivers') || currentUrl.href.includes('new_taripa') && linkUrl.includes('taripa') || currentUrl.href.endsWith(linkUrl)) {
        $(this).addClass('nav-link-active');
      } else {
        $(this).removeClass('nav-link-active');
      }
    }
  });
});

document.addEventListener('DOMContentLoaded', function() {
  let currentUrl = window.location.href;
  let isHome = currentUrl.endsWith('/');
  let navLinks = document.querySelectorAll('.nav-link');
  navLinks.forEach(function(link) {
    if ((link.getAttribute('href') === '#home' && isHome) || (link.getAttribute('href') === '#home' && !isHome && window.location.hash === '#home')) {
      link.classList.add('active');
    }
  });

  // Listen for hash changes and update the active class accordingly
  window.addEventListener('hashchange', function() {
    // Remove the 'active' class from all links
    navLinks.forEach(function(link) {
      link.classList.remove('active');
    });

    // Get the new anchor part of the URL
    let newAnchor = window.location.hash.substr(1);

    navLinks.forEach(function(link) {
      if (link.getAttribute('href') === '#' + newAnchor) {
        link.classList.add('active');
      }
    });
  });
});