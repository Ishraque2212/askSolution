<!-- Question 1 -->
<div class="question-container">
    <label for="question1"><b>Question 1</b>: What will be the output of the following code?</label>
    <hr>
    <pre><code>
x = 5
y = 2
print(x ** y)
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option1" value="A" required>
        <label class="form-check-label" for="q1_option1">25</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option2" value="B">
        <label class="form-check-label" for="q1_option2">10</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option3" value="C">
        <label class="form-check-label" for="q1_option3">7</label>
    </div>
</div>
<!-- Question 2 -->
<div class="question-container">
    <label for="question2"><b>Question 2</b>: What is the correct way to open a file named "example.txt"
        in Python for writing?</label>
    <hr>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option1" value="A" required>
        <label class="form-check-label" for="q2_option1">file = open("example.txt", "r")</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option2" value="B">
        <label class="form-check-label" for="q2_option2">file = open("example.txt", "w")</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option3" value="C">
        <label class="form-check-label" for="q2_option3">file = open("example.txt", "a")</label>
    </div>
</div>
<!-- Question 3 -->
<div class="question-container">
    <label for="question3"><b>Question 3</b>: What is the output of the following code?</label>
    <hr>
    <pre><code>
def func(x, y=3):
    return x * y
print(func(2))
</code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option1" value="A" required>
        <label class="form-check-label" for="q3_option1">6</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option2" value="B">
        <label class="form-check-label" for="q3_option2">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option3" value="C">
        <label class="form-check-label" for="q3_option3">9</label>
    </div>

</div>
<!-- Question 4 -->
<div class="question-container">
    <label for="question4"><b>Question 4</b>: What does the following code output?</label>
    <hr>
    <pre><code>
list1 = [1, 2, 3, 4, 5]
print(list1[1:3])
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option1" value="A" required>
        <label class="form-check-label" for="q4_option1">[2, 3, 4]</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option2" value="B">
        <label class="form-check-label" for="q4_option2">[2, 3]</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option3" value="C">
        <label class="form-check-label" for="q4_option3">[1, 2]</label>
    </div>
</div>
<!-- Question 5 -->
<div class="question-container">
    <label for="question5"><b>Question 5</b>: What is the output of the following code?</label>
    <hr>
    <pre><code>
string = "hello"
print(string[::-1])
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option1" value="A" required>
        <label class="form-check-label" for="q5_option1">olleh</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option2" value="B">
        <label class="form-check-label" for="q5_option2">hello</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option3" value="C">
        <label class="form-check-label" for="q5_option3">h</label>
    </div>
</div>
<!-- Question 6 -->
<div class="question-container">
    <label for="question6"><b>Question 6</b>: What will be the output of the following code?</label>
    <hr>
    <pre><code>
a = [1, 2, 3]
b = a
a[1] = 4
print(b)
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option1" value="A" required>
        <label class="form-check-label" for="q6_option1">[1, 2, 3]</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option2" value="B">
        <label class="form-check-label" for="q6_option2">[1, 4, 3]</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option3" value="C">
        <label class="form-check-label" for="q6_option3">[4, 2, 3]</label>
    </div>
</div>
<!-- Question 7 -->
<div class="question-container">
    <label for="question7"><b>Question 7</b>: What is the output of the following code?</label>
    <hr>
    <pre><code>
x = 0
while x < 5:
    print(x)
    x += 1
else:
    print("Loop finished.")
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option1" value="A" required>
        <label class="form-check-label" for="q7_option1">0 1 2 3 4 Loop finished.</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option2" value="B">
        <label class="form-check-label" for="q7_option2">Loop finished. 0 1 2 3 4</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option3" value="C">
        <label class="form-check-label" for="q7_option3">Loop finished.</label>
    </div>
</div>
<!-- Question 8 -->
<div class="question-container">
    <label for="question8"><b>Question 8</b>: What is the correct way to check if a key exists in a
        dictionary?</label>
    <hr>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option1" value="A" required>
        <label class="form-check-label" for="q8_option1">key in dict</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option2" value="B">
        <label class="form-check-label" for="q8_option2">dict.contains(key)</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option3" value="C">
        <label class="form-check-label" for="q8_option3">dict[key]</label>
    </div>
</div>
<!-- Question 9 -->
<div class="question-container">
    <label for="question9"><b>Question 9</b>: What will be the output of the following code?</label>
    <hr>
    <pre><code>
a = 5
def func():
    a = 3
    print(a)
func()
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option1" value="A" required>
        <label class="form-check-label" for="q9_option1">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option2" value="B">
        <label class="form-check-label" for="q9_option2">3</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option3" value="C">
        <label class="form-check-label" for="q9_option3">Error</label>
    </div>
</div>
<!-- Question 10 -->
<div class="question-container">
    <label for="question10"><b>Question 10</b>: What will be the output of the following code?</label>
    <hr>
    <pre><code>
a = 10
def func():
    global a
    a = 20
    print(a)
func()
print(a)
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option1" value="A"
            required>
        <label class="form-check-label" for="q10_option1">20 20</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option2" value="B">
        <label class="form-check-label" for="q10_option2">10 20</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option3" value="C">
        <label class="form-check-label" for="q10_option3">20 10</label>
    </div>
</div>