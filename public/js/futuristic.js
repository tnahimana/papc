/**
 * PAPC - Futuristic & Interactive Dynamics
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        
        // --------------------------------------------------------------------------
        // 1. HUD Animated Counters
        //    Supports both .counter-animate[data-target] (legacy)
        //    and any element with [data-counter] (new universal pattern)
        // --------------------------------------------------------------------------
        function runCounter(el) {
            const target = +(el.getAttribute('data-target') || el.getAttribute('data-counter')) || 0;
            const prefix = el.getAttribute('data-prefix') || '';
            const suffix = el.getAttribute('data-suffix') || '';
            const duration = 2000;
            const startTime = performance.now();

            function update(currentTime) {
                const elapsed  = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);
                const ease     = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                const val      = Math.floor(ease * target);
                el.innerText   = prefix + val.toLocaleString() + suffix;
                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    el.innerText = prefix + target.toLocaleString() + suffix;
                }
            }
            requestAnimationFrame(update);
        }

        // Collect all counter elements (legacy class + universal data-counter)
        const allCounterEls = document.querySelectorAll('.counter-animate, [data-counter]');
        let animated = false;

        function animateCounters() {
            if (animated) return;
            allCounterEls.forEach(runCounter);
            animated = true;
        }

        // Trigger on scroll into view (IntersectionObserver) — observe first found section
        if (allCounterEls.length > 0 && 'IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        animateCounters();
                        counterObserver.disconnect();
                    }
                });
            }, { threshold: 0.15 });
            // Observe a common ancestor; fall back to each element
            const metricsSection = document.querySelector('.hud-metrics-container') || allCounterEls[0];
            counterObserver.observe(metricsSection);
        } else {
            setTimeout(animateCounters, 800);
        }

        // --------------------------------------------------------------------------
        // 2. Interactive Donation Console
        // --------------------------------------------------------------------------
        const donationButtons = document.querySelectorAll('.donation-pill-btn');
        const customAmountInput = document.getElementById('custom-donation-amount');
        const impactHintText = document.getElementById('donation-impact-text');

        const impactMessages = {
            '10': "Votre don de $10 fournit un kit d'intrants maraîchers à 1 famille vulnérable.",
            '25': "Votre don de $25 garantit l'accès continu à l'eau potable pour 5 personnes.",
            '50': "Votre don de $50 prend en charge la scolarisation complète d'un enfant pendant 1 trimestre.",
            '100': "Votre don de $100 finance des soins médicaux d'urgence et médicaments essentiels via la clinique mobile."
        };

        if (donationButtons.length > 0) {
            donationButtons.forEach(btn => {
                btn.addEventListener('click', function() {
                    donationButtons.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');
                    
                    const amount = this.getAttribute('data-amount');
                    if (customAmountInput) {
                        customAmountInput.value = amount;
                    }
                    if (impactHintText && impactMessages[amount]) {
                        impactHintText.innerText = impactMessages[amount];
                        impactHintText.parentElement.classList.add('animate__animated', 'animate__fadeIn');
                        setTimeout(() => {
                            impactHintText.parentElement.classList.remove('animate__animated', 'animate__fadeIn');
                        }, 500);
                    }
                });
            });
        }

        if (customAmountInput) {
            customAmountInput.addEventListener('input', function() {
                const val = this.value;
                let matched = false;
                donationButtons.forEach(btn => {
                    if (btn.getAttribute('data-amount') === val) {
                        btn.classList.add('active');
                        matched = true;
                    } else {
                        btn.classList.remove('active');
                    }
                });
                
                if (impactHintText) {
                    if (val > 0) {
                        impactHintText.innerText = "Votre don personnalisé de $" + val + " propulse directement nos actions sur le terrain.";
                    } else {
                        impactHintText.innerText = "Chaque contribution transforme concrètement le quotidien des communautés en RDC.";
                    }
                }
            });
        }

        // --------------------------------------------------------------------------
        // 3. Navbar Futuristic Blur on Scroll
        // --------------------------------------------------------------------------
        const navbar = document.querySelector('.fixed-top nav.navbar');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                if (navbar) navbar.classList.add('navbar-futuristic-scrolled');
            } else {
                if (navbar) navbar.classList.remove('navbar-futuristic-scrolled');
            }
        });

        // --------------------------------------------------------------------------
        // 4. Futuristic Hero Carousel Segmented Progress Bar & Interactivity
        // --------------------------------------------------------------------------
        const heroCarousel = document.getElementById('header-carousel');
        const navTabs = document.querySelectorAll('.slider-nav-tab');
        const slideDuration = 7000;
        let progressAnimFrame = null;
        let progressStartTime = null;
        let isPaused = false;
        let pauseTime = 0;
        let activeIndex = 0;

        function progressStep(currentTime) {
            if (!isPaused) {
                const elapsed = currentTime - progressStartTime;
                const ratio = Math.min(elapsed / slideDuration, 1);
                const activeTab = navTabs[activeIndex];
                if (activeTab) {
                    const activeFill = activeTab.querySelector('.tab-progress-fill');
                    if (activeFill) activeFill.style.width = (ratio * 100) + '%';
                }
                if (ratio < 1) {
                    progressAnimFrame = requestAnimationFrame(progressStep);
                }
            } else {
                progressAnimFrame = requestAnimationFrame(progressStep);
            }
        }

        function startSlideProgress(tabIndex) {
            if (progressAnimFrame) {
                cancelAnimationFrame(progressAnimFrame);
            }

            activeIndex = tabIndex;

            navTabs.forEach((tab, i) => {
                const fill = tab.querySelector('.tab-progress-fill');
                if (i === tabIndex) {
                    tab.classList.add('active');
                    if (fill) fill.style.width = '0%';
                } else {
                    tab.classList.remove('active');
                    if (fill) fill.style.width = '0%';
                }
            });

            progressStartTime = performance.now();
            isPaused = false;
            progressAnimFrame = requestAnimationFrame(progressStep);
        }

        if (heroCarousel && navTabs.length > 0) {
            heroCarousel.addEventListener('mouseenter', function() {
                isPaused = true;
                pauseTime = performance.now();
            });

            heroCarousel.addEventListener('mouseleave', function() {
                if (isPaused) {
                    const pausedDuration = performance.now() - pauseTime;
                    progressStartTime += pausedDuration;
                    isPaused = false;
                }
            });

            startSlideProgress(0);

            heroCarousel.addEventListener('slide.bs.carousel', function(event) {
                const toIndex = typeof event.to !== 'undefined' ? event.to : 0;
                startSlideProgress(toIndex);
            });

            navTabs.forEach((tab) => {
                tab.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetIndex = parseInt(this.getAttribute('data-slide-index') || '0', 10);
                    if (window.bootstrap && bootstrap.Carousel) {
                        const carouselInstance = bootstrap.Carousel.getOrCreateInstance(heroCarousel);
                        carouselInstance.to(targetIndex);
                    } else if (window.jQuery) {
                        $(heroCarousel).carousel(targetIndex);
                    }
                });
            });
        }

        // --------------------------------------------------------------------------
        // 5. Testimony Owl Carousel — Futuristic Slider with Custom Nav & Dots
        // --------------------------------------------------------------------------
        const testimonyCarouselEl = document.querySelector('.testimony-owl-carousel');

        if (testimonyCarouselEl && typeof jQuery !== 'undefined' && jQuery.fn.owlCarousel) {
            var $testimony = jQuery('.testimony-owl-carousel');

            $testimony.owlCarousel({
                loop: true,
                margin: 24,
                autoplay: true,
                autoplayTimeout: 5500,
                autoplayHoverPause: true,
                smartSpeed: 700,
                dots: false,
                nav: false,
                responsive: {
                    0:    { items: 1 },
                    768:  { items: 2 },
                    1200: { items: 3 }
                }
            });

            // Custom prev / next buttons
            const prevBtn = document.getElementById('testimonyPrev');
            const nextBtn = document.getElementById('testimonyNext');

            if (prevBtn) prevBtn.addEventListener('click', function() { $testimony.trigger('prev.owl.carousel'); });
            if (nextBtn) nextBtn.addEventListener('click', function() { $testimony.trigger('next.owl.carousel'); });

            // Sync dot indicators
            const dots = document.querySelectorAll('#testimonyDots .testimony-dot');
            const totalSlides = dots.length;

            function syncDots(index) {
                dots.forEach(function(d, i) {
                    d.classList.toggle('active', i === (index % totalSlides));
                });
            }

            $testimony.on('translated.owl.carousel', function(event) {
                syncDots(event.item.index % totalSlides);
            });

            // Clicking dots navigates to that slide
            dots.forEach(function(dot) {
                dot.addEventListener('click', function() {
                    var idx = parseInt(this.getAttribute('data-index'), 10);
                    $testimony.trigger('to.owl.carousel', [idx, 400]);
                    syncDots(idx);
                });
            });
        }

        // --------------------------------------------------------------------------
        // 6. Contact Page Category Tabs Interactivity
        // --------------------------------------------------------------------------
        const contactTabs = document.querySelectorAll('.contact-category-btn');
        const subjectInput = document.getElementById('contact-subject');
        if (contactTabs.length > 0 && subjectInput) {
            contactTabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    contactTabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');
                    const category = this.getAttribute('data-category');
                    if (category) {
                        subjectInput.value = category;
                    }
                });
            });
        }

    });
})();

