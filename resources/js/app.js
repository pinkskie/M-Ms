const faqs = document.querySelectorAll('.faq') 

faqs.forEach(faq => {
  faq.addEvenListener('click', () => {
    faq.classList.toggle('active');
  });
});