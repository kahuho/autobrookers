
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     */
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to the database
        Contact::create($request->all());

        // Optionally, send an email notification
        Mail::to(config('mail.from.address'))->send(new ContactFormMail($request->all()));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
