//
//  CustomerTableViewController.m
//  test training
//
//  Created by prk on 2/9/15.
//  Copyright (c) 2015 prk. All rights reserved.
//

#import "CustomerTableViewController.h"

@interface CustomerTableViewController ()

@end

@implementation CustomerTableViewController

- (id)initWithStyle:(UITableViewStyle)style
{
    self = [super initWithStyle:style];
    if (self) {
        // Custom initialization
    }
    return self;
}

- (void)viewDidLoad
{
    
    [super viewDidLoad];
    self.arrayCustomer = [[NSMutableArray alloc]init];
    //cara connect
    //1.bikin urlnya
    NSURL *url = [[NSURL alloc]initWithString:@"http://agmostudio.com/training/customer.json" ];
    //2.bikin request nya
    self.request = [[NSMutableURLRequest alloc]initWithURL:url];
    //3.buka koneksinya
    self.connection = [[NSURLConnection alloc]initWithRequest:self.request delegate:self startImmediately:YES];
    if(self.connection){
        NSLog(@"Connection Started");}
    
    NSLog(@"table view controller");
    
    // Uncomment the following line to preserve selection between presentations.
    // self.clearsSelectionOnViewWillAppear = NO;
    
    // Uncomment the following line to display an Edit button in the navigation bar for this view controller.
    // self.navigationItem.rightBarButtonItem = self.editButtonItem;
    
}
- (void)connection:(NSURLConnection *)connection didReceiveResponse:(NSURLResponse *)response
{
    
    //404 -> page not found
    //validasi disini
    self.data = [[NSMutableData alloc]init];
    [self.data setLength:0];
}

- (void)connection:(NSURLConnection *)connection didReceiveData:(NSData *)data
{
    [self.data appendData:data];
    
}

-(void)connectionDidFinishLoading:(NSURLConnection *)connection{
    //parsing JSON jadi objek yang mudah dimengerti objek kita
    NSDictionary *dataDictionary = [NSJSONSerialization JSONObjectWithData:self.data options:0 error:nil];
    NSArray *arrCustomerData = [dataDictionary objectForKey:@"data"];
    
    //Looping buat semua data
    for(NSDictionary *customerDictionary in arrCustomerData)
    {
        Cutomer *customer = [[Cutomer alloc]init];
        customer.firstName = [customerDictionary objectForKey:@"firstName"];
        customer.lastName = [customerDictionary objectForKey:@"lastName"];
        customer.age =[[customerDictionary objectForKey:@"age"]integerValue];
        NSDictionary *addressDictionary =[customerDictionary objectForKey:@"address"];
        Address *address =[[Address alloc]init];
        address.streetaddress=[addressDictionary objectForKey:@"streetAddress"];
        address.city=[addressDictionary objectForKey:@"city"];
        address.state=[addressDictionary objectForKey:@"state"];
        address.postalcode=[addressDictionary objectForKey:@"postalCode"];
        customer.address = address;
        NSArray *arrayPhoneNumber = [customerDictionary objectForKey:@"phoneNumber"];
        for(NSDictionary *phoneNumberDictionary in arrCustomerData){
            NSString *type = [phoneNumberDictionary objectForKey:@"type"];
            NSString *number = [phoneNumberDictionary objectForKey:@"number"];
            PhoneNumber *phoneNumber = [[PhoneNumber alloc]initWithType:type andPhoneNumber:number];
            [customer addPhoneNumber:phoneNumber];
        }
        [self.arrayCustomer addObject:customer];
        
    }
    [self.tableView reloadData];
}
-(void)didReceiveMemoryWarning{
    [super didReceiveMemoryWarning];
}

#pragma mark - Table view data source
//Int - Integer diganti sama NSInteger

- (NSInteger)numberOfSectionsInTableView:(UITableView *)tableView
{

    // Return the number of sections.
    return 1;
}

- (NSInteger)tableView:(UITableView *)tableView numberOfRowsInSection:(NSInteger)section
{
    // Return the number of rows in the section.

    return self.arrayCustomer.count;
}


- (UITableViewCell *)tableView:(UITableView *)tableView cellForRowAtIndexPath:(NSIndexPath *)indexPath
{
    UITableViewCell *cell = [tableView dequeueReusableCellWithIdentifier:@"Cell" forIndexPath:indexPath];
    
    // Configure the cell...
    Cutomer *customer = [self.arrayCustomer objectAtIndex:indexPath.row];
    cell.textLabel.text=[NSString stringWithFormat:@"%@ %@",customer.firstName,customer.lastName];
    cell.detailTextLabel.text = [NSString stringWithFormat:@"%@ Years Old",customer.address.city];
    return cell;
    
    return cell;
}
-(void)tableView:(UITableView *)tableView didDeselectRowAtIndexPath:(NSIndexPath *)indexPath
{
    self.selectedindex = indexPath.row;
    [self performSegueWithIdentifier:@"detailSegue" sender:nil];
    
}

/*
// Override to support conditional editing of the table view.
- (BOOL)tableView:(UITableView *)tableView canEditRowAtIndexPath:(NSIndexPath *)indexPath
{
    // Return NO if you do not want the specified item to be editable.
    return YES;
}
*/

/*
// Override to support editing the table view.
- (void)tableView:(UITableView *)tableView commitEditingStyle:(UITableViewCellEditingStyle)editingStyle forRowAtIndexPath:(NSIndexPath *)indexPath
{
    if (editingStyle == UITableViewCellEditingStyleDelete) {
        // Delete the row from the data source
        [tableView deleteRowsAtIndexPaths:@[indexPath] withRowAnimation:UITableViewRowAnimationFade];
    } else if (editingStyle == UITableViewCellEditingStyleInsert) {
        // Create a new instance of the appropriate class, insert it into the array, and add a new row to the table view
    }   
}
*/

/*
// Override to support rearranging the table view.
- (void)tableView:(UITableView *)tableView moveRowAtIndexPath:(NSIndexPath *)fromIndexPath toIndexPath:(NSIndexPath *)toIndexPath
{
}
*/

/*
// Override to support conditional rearranging of the table view.
- (BOOL)tableView:(UITableView *)tableView canMoveRowAtIndexPath:(NSIndexPath *)indexPath
{
    // Return NO if you do not want the item to be re-orderable.
    return YES;
}
*/


#pragma mark - Navigation

// In a storyboard-based application, you will often want to do a little preparation before navigation
- (void)prepareForSegue:(UIStoryboardSegue *)segue sender:(id)sender
{
    // Get the new view controller using [segue destinationViewController].
    // Pass the selected object to the new view controller.
    DetailViewController *controller = (DetailViewController*) segue.destinationViewController;
    Cutomer *selectedCustomer =[self.arrayCustomer objectAtIndex:self.selectedindex];
    controller.customer = selectedCustomer;
    
    
}


@end
