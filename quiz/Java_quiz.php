<!-- Java Question 1: Easy -->
<div class="question-container">
    <label for="question11"><b>Question 1</b>: What is the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int x = 5;
        System.out.println(x++);
    }
}
    </code></pre>
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
        <label class="form-check-label" for="q1_option3">Compiler Error</label>
    </div>
</div>

<!-- Java Question 2: Easy -->
<div class="question-container">
    <label for="question12"><b>Question 2</b>: Which of the following is NOT a valid Java identifier?</label>
    <hr>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option1" value="A" required>
        <label class="form-check-label" for="q2_option1">_variableName</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option2" value="B">
        <label class="form-check-label" for="q2_option2">3variableName</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option3" value="C">
        <label class="form-check-label" for="q2_option3">$variableName</label>
    </div>
</div>

<!-- Java Question 3: Medium -->
<div class="question-container">
    <label for="question13"><b>Question 3</b>: What does the following Java code output?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int num = 9;
        System.out.println(num % 2 == 0 ? "Even" : "Odd");
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option1" value="A" required>
        <label class="form-check-label" for="q3_option1">Even</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option2" value="B">
        <label class="form-check-label" for="q3_option2">Odd</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option3" value="C">
        <label class="form-check-label" for="q3_option3">Compile Error</label>
    </div>
</div>

<!-- Java Question 4: Medium -->
<div class="question-container">
    <label for="question14"><b>Question 4</b>: What is the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int x = 10;
        if (x > 5) {
            System.out.println("Greater than 5");
        } else {
            System.out.println("Less than or equal to 5");
        }
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option1" value="A" required>
        <label class="form-check-label" for="q4_option1">Greater than 5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option2" value="B">
        <label class="form-check-label" for="q4_option2">Less than or equal to 5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option3" value="C">
        <label class="form-check-label" for="q4_option3">No output</label>
    </div>
</div>

<!-- Java Question 5: Hard -->
<div class="question-container">
    <label for="question15"><b>Question 5</b>: What will be the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int i = 1;
        while (true) {
            if (i % 3 == 0) {
                break;
            }
            System.out.println(i);
            i++;
        }
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option1" value="A" required>
        <label class="form-check-label" for="q5_option1">1 2</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option2" value="B">
        <label class="form-check-label" for="q5_option2">1 2 3</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option3" value="C">
        <label class="form-check-label" for="q5_option3">Infinite loop</label>
    </div>
</div>

<!-- Java Question 6: Hard -->
<div class="question-container">
    <label for="question16"><b>Question 6</b>: What is the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int num = 5;
        switch (num) {
            case 1:
                System.out.println("One");
                break;
            case 2:
                System.out.println("Two");
                break;
            default:
                System.out.println("Other");
        }
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option1" value="A" required>
        <label class="form-check-label" for="q6_option1">One</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option2" value="B">
        <label class="form-check-label" for="q6_option2">Two</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option3" value="C">
        <label class="form-check-label" for="q6_option3">Other</label>
    </div>
</div>

<!-- Java Question 7: Hard -->
<div class="question-container">
    <label for="question17"><b>Question 7</b>: What is the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        for (int i = 0; i < 5; i++) {
            System.out.print(i + " ");
            i += 2;
        }
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option1" value="A" required>
        <label class="form-check-label" for="q7_option1">0 2 4</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option2" value="B">
        <label class="form-check-label" for="q7_option2">0 1 2 3 4</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option3" value="C">
        <label class="form-check-label" for="q7_option3">0 1 3</label>
    </div>
</div>

<!-- Java Question 8: Hard -->
<div class="question-container">
    <label for="question18"><b>Question 8</b>: What is the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int x = 5;
        System.out.println(x > 2 ? x < 4 ? 10 : 8 : 7);
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option1" value="A" required>
        <label class="form-check-label" for="q8_option1">10</label>
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

<!-- Java Question 9: Hard -->
<div class="question-container">
    <label for="question19"><b>Question 9</b>: What is the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int[] arr = new int[5];
        System.out.println(arr[0]);
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option1" value="A" required>
        <label class="form-check-label" for="q9_option1">0</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option2" value="B">
        <label class="form-check-label" for="q9_option2">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option3" value="C">
        <label class="form-check-label" for="q9_option3">Error</label>
    </div>
</div>

<!-- Java Question 10: Hard -->
<div class="question-container">
    <label for="question20"><b>Question 10</b>: What is the output of the following Java code?</label>
    <hr>
    <pre><code>
public class Main {
    public static void main(String[] args) {
        int x = 5;
        System.out.println(x += x -= x *= x);
    }
}
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option1" value="A" required>
        <label class="form-check-label" for="q10_option1">-15</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option2" value="B">
        <label class="form-check-label" for="q10_option2">5</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option3" value="C">
        <label class="form-check-label" for="q10_option3">0</label>
    </div>
</div>