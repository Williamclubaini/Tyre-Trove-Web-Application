<div class="container-fluid my-blue-theme" style="height:50vh;">
    <div class="p-5">
        <header class="text-light pt-5 text-center">
            <h1>Frequently Asked Questions</h1>
            <span>Are you new here and looking for answers to your questions?. do not worry much,
                this guide <br>will answer some of your questions and learn more about our website, about us and our
                service.<br>
                If you are not satisfied with question provided below then it's okay to
                question us.
            </span>
        </header>
    </div>
    <div class="py-3 mx-auto col-lg-7">
        <div class="container-fluid">
            <form method="POST" class="d-flex">
                <input class="form-control me-1" name="question" type="search" placeholder="Ask us a question"
                    aria-label="Search" required>
                <input name="answer" type="hidden"
                    value="This question is not answered yet. Please bear with us will soon reply to this question">
                <button name="faq" class="btn text-light w-25 bg-warning hover-1" type="submit">
                    Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- questions -->
<div class="border-bottom">
    <div class="mx-auto col-lg-8 py-5">
        <div class="accordion" id="accordionExample">
            <?php 
            foreach($data as $output):?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button">
                        <?php echo $output->question;?>
                    </button>
                </h2>
                <div class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php echo $output->answer;?>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>