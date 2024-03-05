<!-- Question 1 -->
<div class="question-container">
    <label for="question1"><b>Question 1</b>: What is the output of the following C code?</label>
    <hr>
    <pre>
                    <code>
#include &lt;stdio.h&gt;

int main() {
    int x = 5;
    printf("%d", ++x);
    return 0;
}
                    </code>
                </pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option1" value="A" required>
        <label class="form-check-label" for="q1_option1">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option2" value="B">
        <label class="form-check-label" for="q1_option2">6</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option3" value="C">
        <label class="form-check-label" for="q1_option3">Undefined behavior</label>
    </div>
</div>

<!-- Question 2 -->
<div class="question-container">
    <label for="question2"><b>Question 2</b>: What is the output of the following code snippet?</label>
    <hr>
    <pre>
                    <code>
#include &lt;stdio.h&gt;

int main() {
    int x = 10, y = 20;
    printf("%d", x+++y);
    return 0;
}
                    </code>
                </pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option1" value="A" required>
        <label class="form-check-label" for="q2_option1">30</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option2" value="B">
        <label class="form-check-label" for="q2_option2">21</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option3" value="C">
        <label class="form-check-label" for="q2_option3">Compilation error</label>
    </div>
</div>

<!-- Question 3 -->
<div class="question-container">
    <label for="question3"><b>Question 3</b>: What is the output of the following code snippet?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int x = 5;
    printf("%d\n", x++);
    printf("%d", x);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option1" value="A" required>
        <label class="form-check-label" for="q3_option1">5, 6</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option2" value="B">
        <label class="form-check-label" for="q3_option2">6, 6</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option3" value="C">
        <label class="form-check-label" for="q3_option3">Compilation error</label>
    </div>
</div>

<!-- Question 4 -->
<div class="question-container">
    <label for="question4"><b>Question 4</b>: What will be the output of the following code?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int arr[5] = {1, 2, 3, 4, 5};
    printf("%d", arr[5]);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option1" value="A" required>
        <label class="form-check-label" for="q4_option1">1</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option2" value="B">
        <label class="form-check-label" for="q4_option2">2</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option3" value="C">
        <label class="form-check-label" for="q4_option3">Runtime error</label>
    </div>
</div>

<!-- Question 5 -->
<div class="question-container">
    <label for="question5"><b>Question 5</b>: What is the output of the following code snippet?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int x = 5, y = 7;
    printf("%d", (x > y) ? x : y);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option1" value="A" required>
        <label class="form-check-label" for="q5_option1">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option2" value="B">
        <label class="form-check-label" for="q5_option2">7</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option3" value="C">
        <label class="form-check-label" for="q5_option3">Compilation error</label>
    </div>
</div>

<!-- Question 6 -->
<div class="question-container">
    <label for="question6"><b>Question 6</b>: What will be the output of the following code?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int a = 3, b = 5;
    printf("%d", a * b++);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option1" value="A" required>
        <label class="form-check-label" for="q6_option1">15</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option2" value="B">
        <label class="form-check-label" for="q6_option2">18</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option3" value="C">
        <label class="form-check-label" for="q6_option3">20</label>
    </div>
</div>

<!-- Question 7 -->
<div class="question-container">
    <label for="question7"><b>Question 7</b>: What is the output of the following code snippet?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int x = 10;
    printf("%d", x++);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option1" value="A" required>
        <label class="form-check-label" for="q7_option1">10</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option2" value="B">
        <label class="form-check-label" for="q7_option2">11</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option3" value="C">
        <label class="form-check-label" for="q7_option3">12</label>
    </div>
</div>

<!-- Question 8 -->
<div class="question-container">
    <label for="question8"><b>Question 8</b>: What will be the output of the following code?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int a = 2, b = 3;
    printf("%d", a++ * b++);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option1" value="A" required>
        <label class="form-check-label" for="q8_option1">6</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option2" value="B">
        <label class="form-check-label" for="q8_option2">8</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option3" value="C">
        <label class="form-check-label" for="q8_option3">7</label>
    </div>
</div>

<!-- Question 9 -->
<div class="question-container">
    <label for="question9"><b>Question 9</b>: What is the output of the following code snippet?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int i = 0;
    printf("%d", ++i + i++);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option1" value="A" required>
        <label class="form-check-label" for="q9_option1">1</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option2" value="B">
        <label class="form-check-label" for="q9_option2">2</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option3" value="C">
        <label class="form-check-label" for="q9_option3">3</label>
    </div>
</div>

<!-- Question 10 -->
<div class="question-container">
    <label for="question10"><b>Question 10</b>: What is the output of the following code snippet?</label>
    <hr>
    <pre><code>
#include &lt;stdio.h&gt;

int main() {
    int x = 5;
    x *= 2 + 1;
    printf("%d", x);
    return 0;
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option1" value="A" required>
        <label class="form-check-label" for="q10_option1">15</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option2" value="B">
        <label class="form-check-label" for="q10_option2">16</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option3" value="C">
        <label class="form-check-label" for="q10_option3">14</label>
    </div>
</div>