# Postman Setup Guide for RSRA RestApi

## Quick Start

### 1. Import Collection

1. **Open Postman**
2. **Click "Import"** (top left)
3. **Select "Upload Files"**
4. **Choose**: `RSRA_Essential_Postman_Collection.json`
5. **Click "Import"**

### 2. Create Environment

1. **Click "Environments"** (left sidebar)
2. **Click "Create Environment"**
3. **Name**: `RSRA Local`
4. **Add Variables**:

| Variable | Initial Value | Current Value |
|----------|---------------|---------------|
| `base_url` | `http://localhost/rsra/index.php` | `http://localhost/rsra/index.php` |
| `jwt_token` | _(leave empty)_ | _(will auto-populate)_ |
| `user_id` | _(leave empty)_ | _(will auto-populate)_ |

5. **Click "Save"**
6. **Select "RSRA Local"** environment (top right dropdown)

### 3. Test Setup

1. **Open**: `1. Authentication > Login`
2. **Update credentials** in request body:
   ```json
   {
       "email": "your-admin-email@example.com",
       "password": "your-password"
   }
   ```
3. **Click "Send"**
4. **Verify**: Response shows `"status": true` and token
5. **Check**: `jwt_token` variable is automatically set

## Collection Structure

```
📁 RSRA Essential API Collection
├── 🔐 1. Authentication
│   ├── Login (saves JWT token automatically)
│   └── Update Profile
├── 📊 2. Utility Data
│   ├── Get Client Groups
│   ├── Get Project Labels
│   └── Get Staff Owners
├── 🎯 3. Leads Management
│   ├── Get All Leads
│   ├── Get Lead by ID
│   ├── Create Lead
│   ├── Update Lead
│   ├── Delete Lead
│   └── Search Leads
├── 🏢 4. Clients Management
│   ├── Get All Clients
│   ├── Get Client by ID
│   ├── Create Client
│   └── Update Client
├── 📋 5. Projects Management
│   ├── Get All Projects
│   ├── Create Project
│   └── Update Project
└── 🎫 6. Tickets Management
    ├── Get All Tickets
    └── Create Ticket
```

## Usage Workflow

### Step 1: Authenticate
1. **Run "Login"** request first
2. JWT token saves automatically to environment
3. All other requests use this token

### Step 2: Get Reference Data
1. Run utility endpoints to get dropdown data:
   - Client Groups
   - Project Labels  
   - Staff Owners

### Step 3: CRUD Operations
1. **Create** records using POST requests
2. **Read** records using GET requests
3. **Update** records using PUT requests
4. **Delete** records using DELETE requests

## Request Patterns

### GET Requests (Read)
- **Headers**: `authtoken: {{jwt_token}}`
- **Body**: None
- **Example**: Get all leads

### POST Requests (Create)
- **Headers**: 
  ```
  Content-Type: application/json
  authtoken: {{jwt_token}}
  ```
- **Body**: JSON with required fields
- **Example**: Create new lead

### PUT Requests (Update)  
- **Headers**: Same as POST
- **Body**: JSON with fields to update
- **URL**: Include record ID (`/api/leads/1`)

### DELETE Requests (Delete)
- **Headers**: `authtoken: {{jwt_token}}`
- **Body**: None
- **URL**: Include record ID (`/api/leads/1`)

## Environment Variables

The collection uses these variables:

- **`{{base_url}}`**: Your RSRA URL
- **`{{jwt_token}}`**: Authentication token (auto-set)
- **`{{user_id}}`**: Current user ID (auto-set)

## Auto-Features

### 1. Token Management
- Login request automatically saves JWT token
- All authenticated requests use saved token
- Pre-request script checks for missing tokens

### 2. Base URL Setup  
- Defaults to `http://localhost/rsra/index.php`
- Can be customized in environment variables

### 3. Test Validation
- Login request validates successful authentication
- Automatic status code checks
- Response validation

## Customization

### Change Base URL
1. **Go to**: Environments > RSRA Local
2. **Update**: `base_url` variable
3. **Examples**:
   - `http://localhost/rsra/index.php` (default)
   - `https://yoursite.com/rsra/index.php`
   - `http://127.0.0.1:8000/index.php`

### Add Custom Headers
1. **Open any request**
2. **Go to**: Headers tab
3. **Add**: Custom headers as needed

### Modify Request Bodies
1. **Open any POST/PUT request**
2. **Go to**: Body tab
3. **Edit**: JSON structure
4. **Save**: Request for future use

## Testing Checklist

### ✅ Setup Verification
- [ ] Collection imported successfully
- [ ] Environment created and selected
- [ ] Base URL configured correctly

### ✅ Authentication Test
- [ ] Login request successful
- [ ] JWT token saved to environment
- [ ] Token visible in environment variables

### ✅ Basic CRUD Test
- [ ] Get all leads works
- [ ] Create lead works
- [ ] Update lead works
- [ ] Get lead by ID works

### ✅ Error Handling
- [ ] Invalid token shows proper error
- [ ] Missing fields show validation errors
- [ ] Non-existent IDs return 404

## Common Issues & Solutions

### ❌ "Token is not defined"
**Solution**: Run Login request first to get JWT token

### ❌ "Route not found" (404)  
**Solution**: Check base_url in environment variables

### ❌ Login fails
**Solution**: Verify email/password in request body

### ❌ "Validation errors" (400)
**Solution**: Check required fields in request body

### ❌ Plugin not working
**Solution**: Run activation script:
```bash
php activate_restapi_simple.php
```

## Advanced Usage

### Batch Testing
1. **Select multiple requests**
2. **Click "Run"** 
3. **Use Collection Runner** for automated testing

### Environment Switching
1. **Create multiple environments**:
   - RSRA Local (development)
   - RSRA Staging (testing)  
   - RSRA Production (live)
2. **Switch environments** using dropdown

### Response Validation
Add test scripts to validate responses:
```javascript
pm.test("Status is success", function () {
    const jsonData = pm.response.json();
    pm.expect(jsonData.status).to.eql(true);
});
```

## Export & Share

### Export Collection
1. **Right-click collection**
2. **Select "Export"**
3. **Choose format**: Collection v2.1
4. **Share**: JSON file with team

### Export Environment
1. **Go to**: Environments
2. **Click settings** (3 dots)
3. **Select "Export"**
4. **Share**: Environment JSON file

## Support

### Documentation
- **API Docs**: `RestApi_Documentation.md`
- **Testing Guide**: `API_Testing_Guide.md`

### Troubleshooting
1. Check environment variables are set
2. Verify RSRA application is running
3. Ensure RestApi plugin is activated
4. Check network connectivity

### Contact
For issues with the API setup:
1. Verify plugin activation status
2. Check server error logs
3. Test basic endpoints manually
4. Review request/response format

---

**Quick Tip**: Use the **Console** (bottom of Postman) to see debug information and auto-script outputs! 🔍