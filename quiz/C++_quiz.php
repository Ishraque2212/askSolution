<!-- Question 1 -->
<div class="question-container">
    <label for="question1"><b>Question 1</b>: What does the following C++ code output?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int x = 5;
            std::cout << "Value of x is: " << x << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option1" value="A" required>
        <label class="form-check-label" for="q1_option1">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option2" value="B">
        <label class="form-check-label" for="q1_option2">Value of x is: 5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option3" value="C">
        <label class="form-check-label" for="q1_option3">Compilation Error</label>
    </div>
</div>

<!-- Question 2 -->
<div class="question-container">
    <label for="question2"><b>Question 2</b>: What will be the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int x = 5;
            std::cout << "Value of x++ is: " << x++ << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option1" value="A" required>
        <label class="form-check-label" for="q2_option1">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option2" value="B">
        <label class="form-check-label" for="q2_option2">6</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option3" value="C">
        <label class="form-check-label" for="q2_option3">Value of x++ is: 5</label>
    </div>
</div>

<!-- Repeat the above pattern for the remaining questions -->
<!-- Question 3 -->
<div class="question-container">
    <label for="question3"><b>Question 3</b>: What is the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int num1 = 10;
            int num2 = 20;
            int result = num1 + num2;
            std::cout << "The sum of " << num1 << " and " << num2 << " is: " << result << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option1" value="A" required>
        <label class="form-check-label" for="q3_option1">The sum of 10 and 20 is: 30</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option2" value="B">
        <label class="form-check-label" for="q3_option2">The sum of num1 and num2 is: 30</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option3" value="C">
        <label class="form-check-label" for="q3_option3">Compilation Error</label>
    </div>
</div>

<!-- Question 4 -->
<div class="question-container">
    <label for="question4"><b>Question 4</b>: What will be the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int num = 10;
            std::cout << "Value of num: " << num << std::endl;
            std::cout << "Value of num after postfix increment: " << num++ << std::endl;
            std::cout << "Value of num after postfix increment: " << num << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option1" value="A" required>
        <label class="form-check-label" for="q4_option1">Value of num: 10
            Value of num after postfix increment: 11
            Value of num after postfix increment: 11</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option2" value="B">
        <label class="form-check-label" for="q4_option2">Value of num: 10
            Value of num after postfix increment: 10
            Value of num after postfix increment: 11</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option3" value="C">
        <label class="form-check-label" for="q4_option3">Value of num: 10
            Value of num after postfix increment: 11
            Value of num after postfix increment: 12</label>
    </div>
</div>

<!-- Question 5 -->
<div class="question-container">
    <label for="question5"><b>Question 5</b>: What will be the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int num = 5;
            std::cout << "Value of num: " << num << std::endl;
            std::cout << "Value of ++num: " << ++num << std::endl;
            std::cout << "Value of num after pre-increment: " << num << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option1" value="A" required>
        <label class="form-check-label" for="q5_option1">Value of num: 5
            Value of ++num: 6
            Value of num after pre-increment: 5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option2" value="B">
        <label class="form-check-label" for="q5_option2">Value of num: 5
            Value of ++num: 6
            Value of num after pre-increment: 6</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option3" value="C">
        <label class="form-check-label" for="q5_option3">Value of num: 5
            Value of ++num: 5
            Value of num after pre-increment: 6</label>
    </div>
</div>

<!-- Question 6 -->
<div class="question-container">
    <label for="question6"><b>Question 6</b>: What is the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int x = 10;
            int y = 20;
            int z = x + y;
            std::cout << "The sum of " << x << " and " << y << " is: " << z << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option1" value="A" required>
        <label class="form-check-label" for="q6_option1">The sum of 10 and 20 is: 30</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option2" value="B">
        <label class="form-check-label" for="q6_option2">The sum of x and y is: 30</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option3" value="C">
        <label class="form-check-label" for="q6_option3">Compilation Error</label>
    </div>
</div>

<!-- Question 7 -->
<div class="question-container">
    <label for="question7"><b>Question 7</b>: What will be the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int a = 5;
            int b = 3;
            int c = a * b;
            std::cout << "The product of " << a << " and " << b << " is: " << c << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option1" value="A" required>
        <label class="form-check-label" for="q7_option1">The product of 5 and 3 is: 15</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option2" value="B">
        <label class="form-check-label" for="q7_option2">The product of a and b is: 15</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option3" value="C">
        <label class="form-check-label" for="q7_option3">Compilation Error</label>
    </div>
</div>

<!-- Question 8 -->
<div class="question-container">
    <label for="question8"><b>Question 8</b>: What is the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int x = 10;
            int y = 5;
            int z = x / y;
            std::cout << "The division of " << x << " by " << y << " is: " << z << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option1" value="A" required>
        <label class="form-check-label" for="q8_option1">The division of 10 by 5 is: 2</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option2" value="B">
        <label class="form-check-label" for="q8_option2">The division of x by y is: 2</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option3" value="C">
        <label class="form-check-label" for="q8_option3">Compilation Error</label>
    </div>
</div>
<!-- Question 9 -->
<div class="question-container">
    <label for="question9"><b>Question 9</b>: What will be the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int x = 10;
            int y = 3;
            int z = x % y;
            std::cout << "The modulus of " << x << " by " << y << " is: " << z << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option1" value="A" required>
        <label class="form-check-label" for="q9_option1">The modulus of 10 by 3 is: 1</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option2" value="B">
        <label class="form-check-label" for="q9_option2">The modulus of x by y is: 1</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option3" value="C">
        <label class="form-check-label" for="q9_option3">Compilation Error</label>
    </div>
</div>

<!-- Question 10 -->
<div class="question-container">
    <label for="question10"><b>Question 10</b>: What is the output of the following C++ code?</label>
    <hr>
    <pre><code>
        #include &lt;iostream&gt;

        int main() {
            int num = 20;
            std::cout << "Value of num: " << num << std::endl;
            std::cout << "Value of num after prefix decrement: " << --num << std::endl;
            std::cout << "Value of num after prefix decrement: " << num << std::endl;
            return 0;
        }
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option1" value="A" required>
        <label class="form-check-label" for="q10_option1">Value of num: 20
            Value of num after prefix decrement: 19
            Value of num after prefix decrement: 19</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option2" value="B">
        <label class="form-check-label" for="q10_option2">Value of num: 20
            Value of num after prefix decrement: 19
            Value of num after prefix decrement: 18</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option3" value="C">
        <label class="form-check-label" for="q10_option3">Value of num: 20
            Value of num after prefix decrement: 20
            Value of num after prefix decrement: 19</label>
    </div>
</div>