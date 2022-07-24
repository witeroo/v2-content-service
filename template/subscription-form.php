    <section class="subscribe">
        <div class="subscribe-container">
            <div class="section-header">
                <h2>Subscribe for future updates</h2>
                <p>
                    We regularly publish meaningful industry insights on our blog, subscribe to our newsletter to keep in touch with all out all these and more meaningful updates from us.
                </p>
                <div class="d-flex">
                    <a href="#" class="btn btn-secondary" id="subscribe-btn">Subscribe</a>
                </div>
            </div>
        </div>
    </section>
    <div class="subscription-form-container p-absolute">
        <div class="subscription-form-content">
            <div class="subscription-header p-relative">
                <h1>Subscribe for future updates</h1>
                <button class="close-btn p-absolute">
                    <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5L5 15" stroke="#01040A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 5L15 15" stroke="#01040A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="subscription-body">
                <select id="subscriber-type">
                    <option>Select Subscriber Type</option>
                    <option>Individual</option>
                    <option>Business</option>
                </select>
                <form id="individual-form">
                    <div class="form-row d-flex">
                        <input type="text" name="first-name" placeholder="First Name">
                        <input type="text" name="last-name" placeholder="Last Name">
                    </div>
                    <input type="email" name="email" placeholder="Enter your Email">
                    <input type="text" name="phone" placeholder="Phone Number">
                    <select name="country"><option>Country</option></select>
                    <div class="form-row d-flex">
                        <select name="state"><option>State</option></select>
                        <select name="city"><option>City</option></select>
                    </div>
                    <input type="submit" disabled="disabled" value="Subscribe to Newsletter">
                </form>
                <form id="business-form">
                    <input type="text" name="org-name" placeholder="Name of Organization">
                    <select name="industry"><option>Industry</option></select>
                    <input type="email" name="comp-email" placeholder="Enter Company Email">
                    <input type="text" name="phone" placeholder="Phone Number">
                    <select name="country"><option>Country</option></select>
                    <div class="form-row d-flex">
                        <select name="state"><option>State</option></select>
                        <select name="city"><option>City</option></select>
                    </div>
                    <input type="submit" disabled="disabled" value="Subscribe to Newsletter">
                </form>
            </div>
        </div>
    </div>