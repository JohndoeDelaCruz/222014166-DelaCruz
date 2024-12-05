// Example services data
const services = [
    { name: "Swedish Massage", image: "image/massage.jpg", description: "Relax and unwind with a soothing massage.", price: "$50" },
    { name: "Aromatherapy", image: "image/aroma.jpg", description: "Enhance your mood with essential oils.", price: "$60" },
    { name: "Facial Treatment", image: "image/facial.jpg", description: "Rejuvenate your skin with our treatments.", price: "$70" }
];

// Example testimonials data
const testimonials = [
    { name: "John Doe", comment: "Amazing experience! Highly recommended.", rating: 5 },
    { name: "Jane Smith", comment: "Felt so relaxed after the therapy!", rating: 4.5 }
];

const servicesGrid = document.getElementById('services-grid');
const priceRange = document.getElementById('price-range');
const priceValue = document.getElementById('price-value');
const serviceTypeFilter = document.getElementById('service-type');
const durationFilter = document.getElementById('duration');
const sortBy = document.getElementById('sort-by');

// Load services dynamically
services.forEach(service => {
    const serviceCard = document.createElement('div');
    serviceCard.classList.add('service-card');
    serviceCard.innerHTML = `
        <img src="${service.image}" alt="${service.name}" class="service-image">
        <h3>${service.name}</h3>
        <p>${service.description}</p>
 <p class="price">${service.price}</p>
    `;

    servicesGrid.appendChild(serviceCard);
});

// Load testimonials
const testimonialSlider = document.getElementById('testimonial-slider');
testimonials.forEach(testimonial => {
    const card = document.createElement('div');
    card.className = 'testimonial-card';
    card.innerHTML = `
      <p>"${testimonial.comment}"</p>
      <strong>${testimonial.name}</strong>
      <p>⭐ ${testimonial.rating}</p>
    `;
    testimonialSlider.appendChild(card);
});