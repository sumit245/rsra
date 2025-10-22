# Data Flow

Typical request-level data flow:
1. Router matches URI to Controller@method.
2. Controller validates input and delegates to one or more Models.
3. Models query/update the database and return structured arrays/objects.
4. Controller selects a View and passes data arrays (e.g., `$view_data`).
5. View renders HTML/JS using the provided data.

Notable data domains inferred from models/controllers:
- Projects, Tasks, Milestones, Timesheets
- Invoices, Estimates, Payments, Taxes
- Clients, Leads, Contacts, Companies
- Files, Comments, Notifications
- Tickets, Knowledge Base, Help
- Events, Calendars, Announcements
- Orders, Items, Item Categories
- Settings, Roles, Team, Permissions

