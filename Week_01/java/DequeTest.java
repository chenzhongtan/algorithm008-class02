import java.util.LinkedList;
import java.util.Deque;
public class DequeTest {

	public static void main(String[] args) {		
		Deque<String> deque = new LinkedList<String>();

		deque.addFirst("a");
		deque.addFirst("b");
		deque.addFirst("c");
		System.out.println(deque);

		String str = deque.peekFirst();
		System.out.println(str);

		while (deque.size() > 0) {
			System.out.println(deque.removeFirst());
		}

		System.out.println(deque);
	}
}