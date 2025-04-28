import * as BorrowItemService from './BorrowItemService';
import * as ItemCategoryService from './ItemCategoryService';
import * as ItemService from './ItemService';
import * as LoginService from './LoginService';
import * as RequestBorrowService from './RequestBorrowService';
import * as UserService from './UserService';

export const ApiService = {
    LoginService,
    RequestBorrowService,
    BorrowItemService,
    ItemService,
    ItemCategoryService,
    UserService
};

export default ApiService;
