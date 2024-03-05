<!-- Question 1 -->
<div class="question-container">
    <label for="question1"><b>Question 1</b>: What does the following SQL query output?</label>
    <hr>
    <pre><code>
        SELECT COUNT(*) FROM Orders WHERE Status = 'Delivered';
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option1" value="A" required>
        <label class="form-check-label" for="q1_option1">Total number of orders</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option2" value="B">
        <label class="form-check-label" for="q1_option2">Total number of delivered orders</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[0]" id="q1_option3" value="C">
        <label class="form-check-label" for="q1_option3">Total number of pending orders</label>
    </div>
</div>

<!-- Question 2 -->
<div class="question-container">
    <label for="question2"><b>Question 2</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT MAX(Salary) FROM Employees;
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option1" value="A" required>
        <label class="form-check-label" for="q2_option1">Maximum salary</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option2" value="B">
        <label class="form-check-label" for="q2_option2">Average salary</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[1]" id="q2_option3" value="C">
        <label class="form-check-label" for="q2_option3">Minimum salary</label>
    </div>
</div>

<!-- Repeat the above pattern for the remaining questions -->
<!-- Question 3 -->
<div class="question-container">
    <label for="question3"><b>Question 3</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT AVG(Age) FROM Students;
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option1" value="A" required>
        <label class="form-check-label" for="q3_option1">Maximum age of students</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option2" value="B">
        <label class="form-check-label" for="q3_option2">Average age of students</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[2]" id="q3_option3" value="C">
        <label class="form-check-label" for="q3_option3">Minimum age of students</label>
    </div>
</div>

<!-- Question 4 -->
<div class="question-container">
    <label for="question4"><b>Question 4</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT DISTINCT City FROM Customers;
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option1" value="A" required>
        <label class="form-check-label" for="q4_option1">List of all cities</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option2" value="B">
        <label class="form-check-label" for="q4_option2">List of unique cities</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[3]" id="q4_option3" value="C">
        <label class="form-check-label" for="q4_option3">List of customers along with their cities</label>
    </div>
</div>

<!-- Question 5 -->
<div class="question-container">
    <label for="question5"><b>Question 5</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT COUNT(DISTINCT Department) FROM Employees;
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option1" value="A" required>
        <label class="form-check-label" for="q5_option1">Total number of employees</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option2" value="B">
        <label class="form-check-label" for="q5_option2">Total number of departments</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[4]" id="q5_option3" value="C">
        <label class="form-check-label" for="q5_option3">Total number of employees in each department</label>
    </div>
</div>

<!-- Repeat the above pattern for the remaining questions -->
<!-- Question 6 -->
<div class="question-container">
    <label for="question6"><b>Question 6</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT SUM(Quantity) FROM Orders WHERE ProductID = 1001;
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option1" value="A" required>
        <label class="form-check-label" for="q6_option1">Total quantity of all orders</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option2" value="B">
        <label class="form-check-label" for="q6_option2">Total quantity of orders with ProductID 1001</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[5]" id="q6_option3" value="C">
        <label class="form-check-label" for="q6_option3">Total quantity of orders for all products</label>
    </div>
</div>

<!-- Question 7 -->
<div class="question-container">
    <label for="question7"><b>Question 7</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT MIN(Price) FROM Products;
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option1" value="A" required>
        <label class="form-check-label" for="q7_option1">Minimum price of all products</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option2" value="B">
        <label class="form-check-label" for="q7_option2">Maximum price of all products</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[6]" id="q7_option3" value="C">
        <label class="form-check-label" for="q7_option3">Average price of all products</label>
    </div>
</div>

<!-- Question 8 -->
<div class="question-container">
    <label for="question8"><b>Question 8</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT COUNT(*) FROM Employees WHERE Department = 'HR';
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option1" value="A" required>
        <label class="form-check-label" for="q8_option1">Total number of employees</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option2" value="B">
        <label class="form-check-label" for="q8_option2">Total number of employees in the HR department</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[7]" id="q8_option3" value="C">
        <label class="form-check-label" for="q8_option3">Total number of departments</label>
    </div>
</div>

<!-- Question 9 -->
<div class="question-container">
    <label for="question9"><b>Question 9</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT AVG(Salary) FROM Employees WHERE Department = 'IT';
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option1" value="A" required>
        <label class="form-check-label" for="q9_option1">Average salary of all employees</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option2" value="B">
        <label class="form-check-label" for="q9_option2">Average salary of employees in the IT department</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[8]" id="q9_option3" value="C">
        <label class="form-check-label" for="q9_option3">Average salary of employees in each department</label>
    </div>
</div>

<!-- Question 10 -->
<div class="question-container">
    <label for="question10"><b>Question 10</b>: What will be the output of the following SQL query?</label>
    <hr>
    <pre><code>
        SELECT COUNT(DISTINCT ManagerID) FROM Employees;
    </code></pre>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option1" value="A" required>
        <label class="form-check-label" for="q10_option1">Total number of managers</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option2" value="B">
        <label class="form-check-label" for="q10_option2">Total number of employees with managers</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="answers[9]" id="q10_option3" value="C">
        <label class="form-check-label" for="q10_option3">Total number of distinct managers</label>
    </div>
</div>
