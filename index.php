Hello my name is Lee. 
How are you to day.

public class HanoiTower {
    static  int i=0;
  public static void main(String[] args) {
    hanoi(7, "A", "B", "C");
  }
  public static void hanoi(int n, String a, String b, String c) {
      
    if (n == 0) return;
    hanoi(n - 1, a, c, b);
    i=i+1;
    System.out.println(i + " move " + n + " : " + a + " -> " + c);
    hanoi(n - 1, b, a, c);
  }
}

