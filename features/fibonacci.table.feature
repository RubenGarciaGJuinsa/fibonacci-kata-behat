Feature: Test Fibonacci succession

 Scenario Outline: Get Fibonacci number for sequence table
    Given A Fibonacci sequence algorithm
    When I pass the index <index>
    Then I get the value <result>

    Examples:
      |index|result|
      |1    |0     |
      |2    |1     |
      |3    |1     |
      |4    |2     |
      |5    |3     |
      |6    |5     |